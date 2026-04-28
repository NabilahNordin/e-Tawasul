<?php

namespace App\Filament\Pages;

use App\Models\DeathConfirmation;
use App\Models\Student;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;
use Livewire\WithFileUploads;

class KinDeathConfirmation extends Page
{
    use WithFileUploads;

    protected string $view = 'filament.pages.kin-death-confirmation';

    // ── Common fields ─────────────────────────────────────────────────────────
    public string $dc_matricNo = '';
    public string $dc_studentName = '';
    public string $dc_dateOfDeath = '';
    public $dc_deathCertificate = null;
    public bool $dc_consent = false;
    public bool $dc_submitted = false;

    public function mount(): void
    {
        $kin = auth()->user()->kin;
        $student = Student::where('Guardian_ID', $kin->Kin_ID)->first();

        if ($student) {
            $this->dc_matricNo = $student->Student_id ?? '';
            $this->dc_studentName = $student->Student_Name ?? '';
        }
    }

    public function submitDeathConfirmation(): void
    {
        $rules = [
            'dc_matricNo' => 'required|string',
            'dc_dateOfDeath' => 'required|date|before_or_equal:today',
            'dc_deathCertificate' => 'required|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:10240',
            'dc_consent' => 'accepted',
        ];

        $this->validate($rules, [
            'dc_matricNo.required' => 'Student ID / Matric Number is required.',
            'dc_dateOfDeath.required' => 'Date of death is required.',
            'dc_dateOfDeath.date' => 'Please provide a valid date.',
            'dc_dateOfDeath.before_or_equal' => 'Date of death cannot be in the future.',
            'dc_deathCertificate.required' => 'Death certificate (Sijil Mati) is required.',
            'dc_deathCertificate.mimes' => 'Death certificate must be a PDF, image, or document file.',
            'dc_deathCertificate.max' => 'Death certificate must not exceed 10 MB.',
            'dc_consent.accepted' => 'You must confirm that the student has legally passed away.',
        ]);

        try {
            // Store the file
            $filePath = $this->dc_deathCertificate->store('death-certificates', 'public');

            // Create death confirmation record
            DeathConfirmation::create([
                'Kin_ID' => auth()->user()->kin->Kin_ID,
                'Student_ID' => $this->dc_matricNo,
                'Date_Confirmed' => $this->dc_dateOfDeath,
                'Verified_By_Kin' => $filePath,
                'Admin_Comments' => '',
            ]);

            $this->dc_submitted = true;

            Notification::make()
                ->success()
                ->title('Death Confirmation Submitted')
                ->body('The death confirmation has been submitted successfully. The university will review and verify the information.')
                ->send();

            // Redirect after 2 seconds
            $this->redirect(KinDashboard::getUrl(), navigate: true);
        } catch (\Exception $e) {
            Notification::make()
                ->danger()
                ->title('Submission Failed')
                ->body('An error occurred while submitting the death confirmation. Please try again.')
                ->send();
        }
    }

    public function getTitle(): string | Htmlable
    {
        return 'Death Confirmation';
    }

    /* public static function shouldRegisterNavigation(): bool
    {
        return false; // accessed via button only, not shown in nav
    }*/
}
