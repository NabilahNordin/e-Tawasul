<?php

namespace App\Filament\Pages;

use Livewire\Component;
use Filament\Pages\Page;
use Filament\Actions\Action;

use Filament\Support\Enums\Width;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Filament\Actions\Contracts\HasActions;


use Filament\Schemas\Contracts\HasSchemas;

use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Schemas\Concerns\InteractsWithSchemas;


class Welcome extends Page implements HasActions, HasSchemas
{
    use InteractsWithActions;
    use InteractsWithSchemas;
    protected string $view = 'filament.pages.welcome';
    protected static string $layout = 'filament-panels::components.layout.base';

    protected static bool $shouldRegisterNavigation = false;


    public function donatenowAction(): Action
    {
        return Action::make('donatenow')
            ->label('Donate Now')
            ->icon('heroicon-s-heart')
            ->extraAttributes(['class' => 'mt-4 w-full bg-gradient-to-r from-black to-gray-800 text-white py-4 rounded-xl
                   flex items-center justify-center gap-3 text-lg font-medium hover:opacity-90 transition'])
            // ->requiresConfirmation()
            ->action(fn() => null)
            ->modalContent(fn($record): View => view(
                'filament.pages.actions.advance',
                ['record' => $record],
            ))
            ->modalSubmitAction(false)
            ->modalWidth(Width::FiveExtraLarge);
    }
}
