<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAD extends Controller
{
    public function Login(SebraeUsersLoginRequest $request){
        $request->validated();
        // capturar o usuário e password
        $username = $request->username; #id do elemento html
        $password = $request->password; #id do elemento html

        /**
         * Documentação do ldaprecord.
         * Doc:https://ldaprecord.com/docs/core/v3/
         * 
         * @param  Connection é criado com LdapRecord\Connection;
         * @param config, é um array para ajudar a criar uma conexão com o ldap, cada parametro é capturado no arquivo .env
         * LEMBRE-SE DE CHAMAR AS CLASSES NECESSÁRIAS DO LDAPRECORD
         */

        $config = [
            'hosts' => [getenv('LDAP_HOSTS')], // Host do servidor LDAP
            'port' => getenv('LDAP_PORT'), // Porta do servidor LDAP (geralmente 389 para LDAP, 636 para LDAPS)
            'base_dn' => getenv('LDAP_BSDN'), // Base DN do seu domínio AD
            'username' => getenv('LDAP_USERNAME'), // Nome de usuário com permissão para fazer consultas no AD
            'password' => getenv('LDAP_PASSWORD'), // Senha do usuário LDAP
            'use_ssl' => false, // Define se a conexão deve usar SSL (LDAPS)
            'use_tls' => false, // Define se a conexão deve usar TLS
        ];

        /**
         * Aós realizar a criação da conexão com new Connection($config) você pode usar um dos vários métodos utilizados para se comunicar com o LDAP
         * o método utilizado para authenticar é ->auth()->attempt(username, password)
        */

        try {
            $connection = new Connection($config);
            $nameFull = $request->username . '@rr.sebrae.corp';
            if (!$connection->auth()->attempt($name, strval($password))) {
                return redirect()->route('Login')->withErrors(['INVALID_USER' => 'Usuário ou senha incorretos']);
            }

            Cookie::queue('CID', strval($request->username), 60);
            session(['USR' => $request->username]);
            return $next($request);
        } catch (BindExecpt $e) {
            return redirect()->route('Login')->withErrors(['LDAP_ERROR' => 'Impossível se conectar ao servidor']);
        }finally{

            return view('Login.ActiveDirectory');
        }
    }
}
