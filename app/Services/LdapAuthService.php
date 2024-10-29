<?php

namespace App\Services;

use App\Contracts\LDAP\LdapContract;

class LdapAuthService implements LdapContract
{

    public function isAuthenticate(String $username, String $password): bool
    {
        return true;
    }
}
