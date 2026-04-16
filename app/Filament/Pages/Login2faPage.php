<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class Login2faPage extends Page
{
    protected string $view = 'filament.pages.login2fa-page';
    protected static string $layout = 'filament-panels::components.layout.base';

    protected static bool $shouldRegisterNavigation = false;
    public $verificationmode;

    public function mount()
    {
        $this->verificationmode = 'email';
    }

    function selectverificationmode($verificationmode = null)
    {
        $this->verificationmode = $verificationmode;
    }



    function verify2fa()
    {
        $user = User::role('kin')->first();
        Auth::login($user);

        return redirect(url('/admin/kin-dashboard'));
    }
}
