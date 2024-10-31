<?php

namespace App\Providers\JWT;

use App\Contracts\JWT\JwtContract;
use App\Services\JWT\JwtService;
use Illuminate\Support\ServiceProvider;

class JwtServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(JwtContract::class, function ($app) {
            return new JwtService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
