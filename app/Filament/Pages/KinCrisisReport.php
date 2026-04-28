<?php

namespace App\Filament\Pages;

use App\Models\Crisis;
use App\Models\Student;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;
use Livewire\WithFileUploads;

class KinCrisisReport extends Page
{
    use WithFileUploads;

    protected string $view = 'filament.pages.kin-crisis-report';

    // ── Common fields ─────────────────────────────────────────────────────────
    public string $cf_matricNo    = '';
    public string $cf_crisisType  = '';
    public string $cf_location    = '';
    public string $cf_description = '';
    public bool   $cf_consent     = false;

    // ── Natural Disaster ──────────────────────────────────────────────────────
    public string $cf_disasterSubType = '';

    // ── Accident ──────────────────────────────────────────────────────────────
    public string $cf_incidentDateTime = '';
    public bool   $cf_wasHospitalized  = false;
    public string $cf_hospitalName     = '';

    // ── Illness ───────────────────────────────────────────────────────────────
    public string $cf_illnessType   = '';
    public        $cf_medicalLetter = null;

    // ── Supporting documents ──────────────────────────────────────────────────
    public $cf_supportingDocs = [];

    public bool $cf_submitted = false;

    public function mount(): void
    {
        $kin = auth()->user()->kin;
        $student = Student::where('Guardian_ID', $kin->Kin_ID)->first();

        if ($student) {
            $this->cf_matricNo = $student->Student_id ?? '';
        }
    }

    public function updatedCfCrisisType(): void
    {
        $this->cf_disasterSubType  = '';
        $this->cf_incidentDateTime = '';
        $this->cf_wasHospitalized  = false;
        $this->cf_hospitalName     = '';
        $this->cf_illnessType      = '';
        $this->cf_medicalLetter    = null;
    }

    public function submitCrisisReport(): void
    {
        $rules = [
            'cf_matricNo'    => 'required|string',
            'cf_crisisType'  => 'required|string',
            'cf_location'    => 'required_unless:cf_crisisType,Accident|string|nullable',
            'cf_description' => 'required|string|min:10',
            'cf_consent'     => 'accepted',
        ];

        if ($this->cf_crisisType === 'Natural Disaster') {
            $rules['cf_disasterSubType'] = 'required|string';
        }

        if ($this->cf_crisisType === 'Accident') {
            $rules['cf_incidentDateTime'] = 'required|date';
            $rules['cf_location']         = 'required|string';
            if ($this->cf_wasHospitalized) {
                $rules['cf_hospitalName'] = 'required|string';
            }
        }

        if ($this->cf_crisisType === 'Illness') {
            $rules['cf_illnessType']   = 'required|string';
            $rules['cf_medicalLetter'] = 'nullable|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:10240';
        }

        $rules['cf_supportingDocs.*'] = 'nullable|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:10240';

        $this->validate($rules, [
            'cf_matricNo.required'         => 'Student ID / Matric Number is required.',
            'cf_crisisType.required'       => 'Please select a crisis type.',
            'cf_description.required'      => 'Please provide a description.',
            'cf_description.min'           => 'Description must be at least 10 characters.',
            'cf_consent.accepted'          => 'You must consent to share information.',
            'cf_disasterSubType.required'  => 'Please specify the type of disaster.',
            'cf_incidentDateTime.required' => 'Please provide the incident date and time.',
            'cf_illnessType.required'      => 'Please specify the illness type.',
        ]);

        $medicalLetterPath  = null;
        $supportingDocPaths = [];

        if ($this->cf_medicalLetter) {
            $medicalLetterPath = $this->cf_medicalLetter->store('crisis-documents/medical-letters', 'public');
        }

        foreach (($this->cf_supportingDocs ?? []) as $doc) {
            $supportingDocPaths[] = $doc->store('crisis-documents/supporting', 'public');
        }

        $subType = match ($this->cf_crisisType) {
            'Natural Disaster' => $this->cf_disasterSubType,
            'Illness'          => $this->cf_illnessType,
            default            => null,
        };

        Crisis::create([
            'Reported_By'          => auth()->user()->kin?->Kin_ID,
            'Matric_No'            => $this->cf_matricNo,
            'Crisis_Type'          => $this->cf_crisisType,
            'Sub_Type'             => $subType,
            'Location'             => $this->cf_location,
            'Crisis_Description'   => $this->cf_description,
            'Date_Reported'        => now(),
            'Incident_DateTime'    => $this->cf_crisisType === 'Accident' ? $this->cf_incidentDateTime : null,
            'Hospital_Name'        => ($this->cf_crisisType === 'Accident' && $this->cf_wasHospitalized) ? $this->cf_hospitalName : null,
            'Medical_Letter'       => $medicalLetterPath,
            'Supporting_Documents' => $supportingDocPaths ?: null,
            'Consent_Share'        => $this->cf_consent,
            'Status'               => 'Open',
        ]);

        Notification::make()
            ->title('Crisis report submitted successfully.')
            ->success()
            ->send();

        $this->cf_submitted = true;
    }

    public function getTitle(): string | Htmlable
    {
        return __('Crisis Report');
    }

    /*public static function shouldRegisterNavigation(): bool
    {
        return false; // accessed via button only, not shown in nav
    }*/
}
