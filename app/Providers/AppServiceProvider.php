<?php

namespace App\Providers;

use Livewire\Livewire;
use Illuminate\Auth\Events\Logout;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

use Filament\Support\Facades\FilamentView;
use Filament\Auth\Http\Responses\Contracts\LoginResponse as LoginResponseContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        FilamentView::registerRenderHook(
            PanelsRenderHook::BODY_END,
            // fn () => view('customFooter'),
            fn() => Blade::render('@livewire(\App\Filament\Pages\Footer::class)')
        );

        $this->app->bind(LoginResponseContract::class, \App\Http\Responses\LoginResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         if($this->app->environment('production')) {
            URL::forceScheme('https');
            // $this->app['request']->server->set('HTTPS', true);
        }

         // Get the base URL
         $baseUrl = url('/'); // 
         $parsedUrl = parse_url($baseUrl);
         $basePath = $parsedUrl['path'] ?? ''; // 
 
         if ($basePath !== '' && $basePath !== '/') {
             // If it's a subdirectory
             Livewire::setScriptRoute(function ($handle) use ($basePath) {
                 return Route::get($basePath . '/livewire/livewire.js', $handle)->middleware('web');
             });
             Livewire::setUpdateRoute(function ($handle) use ($basePath) {
                 return Route::post($basePath . '/livewire/update', $handle)->middleware('web')->name('custom-update');
             });
         } else {
             // Root domain
             Livewire::setScriptRoute(function ($handle) {
                 return Route::get('/livewire/livewire.js', $handle)->middleware('web');
             });
             Livewire::setUpdateRoute(function ($handle) {
                 return Route::post('/livewire/update', $handle)->middleware('web')->name('custom-update');
             });
         }
         
        //
        Event::listen(Logout::class, function ($event) {
            activity()
                ->causedBy($event->user)
                ->log('user logged out');
        });
    }
}
