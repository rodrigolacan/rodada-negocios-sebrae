<?php

namespace App\Services;

use LdapRecord\Connection;
use LdapRecord\Auth\BindException as BindExecpt;
use Illuminate\Support\Facades\Log;
use App\Contracts\LDAP\LdapContract;

/**
 * Documentação do ldaprecord.
 * Doc:https://ldaprecord.com/docs/core/v3/
 * 
 * @param  Connection é criado com LdapRecord\Connection;
 * @param config, é um array para ajudar a criar uma conexão com o ldap, cada parametro é capturado no arquivo .env
 * LEMBRE-SE DE CHAMAR AS CLASSES NECESSÁRIAS DO LDAPRECORD
 */
class LdapAuthService implements LdapContract
{

    public function isAuthenticate(String $username, String $password): bool
    {
        $config = config('ldap.connections.default');

        try {
            $connection = new Connection($config);

            $user = $connection->query()
                ->where('samaccountname', '=', $username)
                ->firstOrFail();

            // Tentar autenticar o usuário
            if (!$connection->auth()->attempt($user['distinguishedname'][0], strval($password))) {
                Log::channel('ldap')->warning('Tentativa de autenticação falhou para o usuário: ' . $username);
                return false;
            }

            Log::channel('ldap')->info('Cookie CID criado com sucesso! Usuário autenticado: ' . $username);
            return true;
        } catch (BindExecpt $e) {
            Log::channel('ldap')->warning('Erro ao tentar conectar ao LDAP: ' . $e->getMessage());
            return false;
        } catch (\Exception $e) {
            Log::channel('ldap')->error('Erro inesperado: ' . $e->getMessage());
            return false;
        }

        return false;
    }
}
