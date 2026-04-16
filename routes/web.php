<?php

use App\Filament\Pages\ChangePassword;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect(url('/admin'));
});


Route::get('/change-password', ChangePassword::class);



