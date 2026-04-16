<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Footer extends Page
{
    protected string $view = 'filament.pages.footer';
    protected static string $layout = 'filament-panels::components.layout.base';
    protected static bool $shouldRegisterNavigation = false;
}
