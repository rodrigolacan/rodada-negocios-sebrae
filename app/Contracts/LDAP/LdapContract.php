<?php
namespace App\Contracts\LDAP;

interface LdapContract{

    public function isAuthenticate(String $usernmae, String $password):bool;

}