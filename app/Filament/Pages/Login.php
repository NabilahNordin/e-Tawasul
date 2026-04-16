<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Auth\Pages\Login as OriLogin;
use Filament\Schemas\Components\Component;
use Filament\Models\Contracts\FilamentUser;
use Filament\Auth\Http\Responses\Contracts\LoginResponse;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;

class Login extends OriLogin
{
    protected string $view = 'filament.pages.login';
    protected static string $layout = 'filament-panels::components.layout.base';
    public $typelogin;

    public function mount(): void
    {
        if (Filament::auth()->check()) {
            redirect()->intended(Filament::getUrl());
        }

        $this->typelogin = 'student';

        $this->form->fill();
    }

    protected function getFormActions(): array
    {
              return [
                $this->getAuthenticateFormAction()
                ->visible(fn()=> in_array($this->typelogin, ['student', 'admin'])),
                $this->get2faFormAction()
                  ->visible(fn()=> in_array($this->typelogin, ['next-kin'])),
            ];

        // if (in_array($this->typelogin, ['student', 'admin'])) {
        //     return [
        //         $this->getAuthenticateFormAction(),
        //     ];
        // } else {
        //     return [
        //         $this->get2faFormAction(),
        //     ];
        // }
    }

    protected function get2faFormAction(): Action
    {
        return Action::make('2fa')
            ->label('Continue to 2FA')
            ->action(function($livewire){
                $livewire->redirect(Login2faPage::getUrl());
            });
    }

    function loginAs($typelogin = null)
    {
        $this->typelogin = $typelogin;
    }


    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getUsernameFormComponent()
                    ->visible(fn() => in_array($this->typelogin, ['student', 'admin', 'next-kin'])),
                $this->getNextkinFormComponent()
                    ->visible(fn() => $this->typelogin == 'next-kin'),
                $this->getPasswordFormComponent()
                    ->visible(fn() => in_array($this->typelogin, ['student', 'admin'])),
                $this->getRememberFormComponent()
                    ->visible(fn() => in_array($this->typelogin, ['student', 'admin'])),
            ]);
    }


    protected function getNextkinFormComponent(): Component
    {
        return Group::make()
            ->schema([
                TextInput::make('fullname')
                    ->label('Your Full Name')
                    ->required()
                    ->extraInputAttributes(['tabindex' => 1]),

                TextInput::make('relationship')
                    ->label('Relationship to Student')
                    ->required()
                    ->extraInputAttributes(['tabindex' => 1]),
                TextInput::make('phonenumber')
                    ->label('Contact Phone Number')
                    ->required()
                    ->extraInputAttributes(['tabindex' => 1])


            ]);
    }

    protected function getUsernameFormComponent(): Component
    {
        return TextInput::make('username')
            ->label(fn() => $this->typelogin == 'student' ? 'Student/Staff ID or Email' : ($this->typelogin == 'admin' ? 'Student/Staff ID or Email' : ($this->typelogin == 'next-kin' ? 'Student ID' : __('Username'))))
            ->required()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    public function authenticate(): ?LoginResponse
    {
        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            $this->getRateLimitedNotification($exception)?->send();

            return null;
        }

        $data = $this->form->getState();
        $check = $this->processLogin($data);
        if (!$check) {
            return null;
        }
        $user = Filament::auth()->user();

        if (
            ($user instanceof FilamentUser) &&
            (!$user->canAccessPanel(Filament::getCurrentPanel()))
        ) {
            Filament::auth()->logout();
            $this->throwFailureValidationException();
        }


        session()->regenerate();

        return app(LoginResponse::class);
    }

    function processLogin($data)
    {
        $user = User::where('username', $data['username'])
            ->first();

        if ($user && Hash::check($data['password'], $user->password)) {


            Auth::login($user);
            activity()
                ->causedBy(auth()->user())
                ->withProperties([
                    'ip'    => request()->ip(),
                    'agent' => request()->userAgent(),
                ])
                ->log('user logged in');
            return true;
        }

        Notification::make()
            ->title(__('Data not found'))
            ->danger()
            ->send();

        return false;
    }
}
