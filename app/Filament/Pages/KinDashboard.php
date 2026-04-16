<?php

namespace App\Filament\Pages;

use App\Models\Student;
use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;

class KinDashboard extends Page
{
    protected string $view = 'filament.pages.kin-dashboard';

    public ?Student $student = null;

    public function mount(): void
    {
        $kin = auth()->user()->kin;
        $this->student = Student::where('Guardian_ID', $kin->Kin_ID)->first();
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
