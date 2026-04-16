<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;

class KinDashboard extends Page
{
    protected string $view = 'filament.pages.kin-dashboard';

      public function getTitle(): string | Htmlable
    {
        return __('');
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasRole(['kin']);
    }
}
