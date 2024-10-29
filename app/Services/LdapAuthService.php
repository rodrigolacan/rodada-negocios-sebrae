<?php
namespace App\Services;

use App\Contracts\LDAP\LdapContract;

Class LodapAuthService implements LdapContract{

    public function isAuthenticate($username, $password){
        return true;
    }
}