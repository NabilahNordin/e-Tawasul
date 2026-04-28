<?php

namespace App\Filament\Pages;

use App\Models\Crisis;
use App\Models\Student;
use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Collection;

class KinDashboard extends Page
{
    protected string $view = 'filament.pages.kin-dashboard';

    public ?Student $student = null;
    public Collection $crisisReports;

    public function mount(): void
    {
        $kin = auth()->user()->kin;
        $this->student = Student::where('Guardian_ID', $kin->Kin_ID)->first();

        // Fetch all crisis reports submitted by this Kin
        $this->crisisReports = Crisis::where('Reported_By', $kin->Kin_ID)
            ->orderBy('Date_Reported', 'desc')
            ->get();
    }

    public function openCrisisForm(): void
    {
        $this->redirect(KinCrisisReport::getUrl());
    }

    public function openDeathConfirmation(): void
    {
        $this->redirect(KinDeathConfirmation::getUrl());
    }

    public function getTitle(): string | Htmlable
    {
        return __('');
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasRole(['kin']);
    }
}

