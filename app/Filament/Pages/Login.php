<?php

namespace App\Filament\Pages;

use App\Models\Student;
use App\Models\User;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Actions\Action;
use Filament\Auth\Http\Responses\Contracts\LoginResponse;
use Filament\Auth\Pages\Login as OriLogin;
use Filament\Facades\Filament;
use Filament\Forms\Components\TextInput;
use Filament\Models\Contracts\FilamentUser;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                ->visible(fn() => in_array($this->typelogin, ['student', 'admin'])),
            $this->get2faFormAction()
                ->visible(fn() => in_array($this->typelogin, ['next-kin'])),
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
            ->action(function ($livewire) {
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
                // $this->getEmailFormComponent()
                //     ->visible(fn() => in_array($this->typelogin, ['student'])),
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

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label(fn() => $this->typelogin == 'student' ? 'Student/Staff Email' : ($this->typelogin == 'admin' ? 'Student/Staff ID or Email' : ($this->typelogin == 'next-kin' ? 'Student ID' : __('Username'))))
            ->email()
            ->required()
            ->unique(ignoreRecord: true)
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getUsernameFormComponent(): Component
    {
        return TextInput::make('username')
            ->label(fn() => $this->typelogin == 'student' ? 'Student/Staff ID' : ($this->typelogin == 'admin' ? 'Student/Staff ID or Email' : ($this->typelogin == 'next-kin' ? 'Student ID' : __('Username'))))
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
        if ($this->typelogin == 'student') {
            $login_data = User::api_login($data['username'], $data['password']);

            if ($login_data) {
                $getProfile = User::api_getProfile($login_data);


                $getEmail = User::playwrightscrapelogin($data['username'], $data['password']);
                $getEmail = $getEmail?->email ?? false;
                dd($getEmail);

            } else {
                Notification::make()
                    ->title(__('Data not found'))
                    ->danger()
                    ->send();

                return false;
            }

            if ($login_data && $getEmail) {
                $user =  User::updateOrCreate([
                    'email' => $getEmail
                ], [
                    'name' => $getProfile['data']['name'],
                    'email' => $getEmail,
                    'password' => $data['password'],
                ]);

                $student =  Student::updateOrCreate([
                    'email' => $getEmail
                ], [
                    'Student_id' => $getProfile['data']['matric_no'],
                    'Last_Name' => $getProfile['data']['name'],
                    'Email' => $getEmail,
                    'Status' => 'active',
                    // 'Date_Report' => null,
                    // 'Emergency_Contact' => null,
                    // 'Guardian_ID' => $getProfile['data']['name'],
                    'image_url' => $getProfile['data']['image_url'],
                    'name' => $getProfile['data']['name'],
                    'matric_no' => $getProfile['data']['matric_no'],
                    'level' => $getProfile['data']['level'],
                    'kuliyyah' => $getProfile['data']['kuliyyah'],
                    'ic' => $getProfile['data']['ic'],
                    'gender' => $getProfile['data']['gender'],
                    'birthday' => $getProfile['data']['birthday'],
                    'religion' => $getProfile['data']['religion'],
                    'marital_status' => $getProfile['data']['marital_status'],
                    'address' => $getProfile['data']['address'],
                ]);

                Auth::login($user);
                activity()
                    ->causedBy(auth()->user())
                    ->withProperties([
                        'ip'    => request()->ip(),
                        'agent' => request()->userAgent(),
                    ])
                    ->log('user logged in');
                return true;
            } else {
                Notification::make()
                    ->title(__('Data not found'))
                    ->danger()
                    ->send();

                return false;
            }
        } else {
            $user = User::where('email', $data['username'])
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
}
