<?php

namespace App\Providers\LDAP;

use Illuminate\Support\ServiceProvider;
use App\Contracts\LDAP\LdapContract;
use App\Services\LdapAuthService;

class LdapAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(LdapContract::class, function ($app) {
            return new LdapAuthService();
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
