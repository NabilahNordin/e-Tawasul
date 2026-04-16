<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Contracts\View\View;

class Preloader extends Page
{
    protected string $view = 'filament.pages.preloader';
    protected static string $layout = 'filament-panels::components.layout.base';
    protected static bool $shouldRegisterNavigation = false;

    public $isLoading = true;


    public function render(): View
    {
        $this->dispatch('preloader');
        return view($this->getView(), $this->getViewData())
            ->layout($this->getLayout(), [
                'livewire' => $this,
                'maxContentWidth' => $this->getMaxContentWidth(),
                ...$this->getLayoutData(),
            ]);
    }
}
