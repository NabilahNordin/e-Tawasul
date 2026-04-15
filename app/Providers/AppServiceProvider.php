<?php

namespace App\Providers;
use Illuminate\Support\Facades\Auth;
use Filament\Facades\Filament;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            if (Auth::check()) {
                $user = Auth::user();
                switch ($user->role) {
                    case 'admin':
                        return redirect()->route('admin.dashboard');
                    case 'student':
                        return redirect()->route('student.dashboard');
                    case 'kin':
                        return redirect()->route('kin.dashboard');
                }
            }
        });
    }
}
