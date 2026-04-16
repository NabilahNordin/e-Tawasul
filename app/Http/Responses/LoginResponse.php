<?php

namespace App\Http\Responses;

use Filament\Auth\Http\Responses\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        if (auth()->user()->hasRole('admin')) {
            $url = url('/admin/admin-dashboard');
        } else if (auth()->user()->hasRole('student')) {
            $url = url('/admin/dashboard');
        } else if (auth()->user()->hasRole('kin')) {
            $url = url('/admin/kin-dashboard');
        }else{
            $url = url('/admin');
        }


        return redirect()->intended($url);
    }
}
