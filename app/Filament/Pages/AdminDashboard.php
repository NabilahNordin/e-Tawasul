<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;

class AdminDashboard extends Page
{
    protected string $view = 'filament.pages.admin-dashboard';

      public function getTitle(): string | Htmlable
    {
        return __('');
    }

      public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasRole(['admin']);
    }
}
