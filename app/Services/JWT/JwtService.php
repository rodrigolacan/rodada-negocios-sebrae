<?php

namespace App\Services\JWT;

use App\Contracts\JWT\JwtContract;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

/**
 * Documentação do ldaprecord.
 * Doc:https://ldaprecord.com/docs/core/v3/
 * 
 * @param  Connection é criado com LdapRecord\Connection;
 * @param config, é um array para ajudar a criar uma conexão com o ldap, cada parametro é capturado no arquivo .env
 * LEMBRE-SE DE CHAMAR AS CLASSES NECESSÁRIAS DO LDAPRECORD
 */
class JwtService implements JwtContract
{
    public function decode($token, $keyPath): array
    {
        $publicKeyPEM = file_get_contents($keyPath);

        $decoded = JWT::decode($token, new Key($publicKeyPEM, 'RS256'));
        $decoded_array = (array) $decoded;
        return $decoded_array;
    }
}
