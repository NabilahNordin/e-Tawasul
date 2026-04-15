<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class Login extends Page
{
    protected string $view = 'filament.pages.login'; // Define the view for the login page

    public $email;
    public $password;
    public $role = 'student'; // Default role is 'student'

    // Method to set the role based on user click
    public function setRole($role)
    {
        $this->role = $role;
    }

    // Method to handle login logic
    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        // Attempt authentication
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect based on role
            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'student') {
                return redirect()->route('student.dashboard');
            } elseif ($user->role == 'next_of_kin') {
                return redirect()->route('kin.dashboard');
            }
        } else {
            session()->flash('error', 'Invalid credentials');
        }
    }
}
