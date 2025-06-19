<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


public function boot()
{
    
}

public static function redirectTo()
{
    $user = Auth::user();

    if (!$user) {
        return '/login';
    }

    return match ($user->role) {
        'admin' => '/admin/dashboard',
        'teknisi' => '/teknisi/dashboard',
        'customer' => '/customer/dashboard',
        default => '/',
    };
}


}
