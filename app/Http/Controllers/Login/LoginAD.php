<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LdapRecord\Connection;
use LdapRecord\Auth\BindException as BindExecpt;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;


class LoginAD extends Controller
{
    public function login(Request $request)
    {
        return view('LoginActiveDirectory.Login');
    }

    public function loginService(Request $request)
    {
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
        $config = config('ldap.connections.default');
        /**
         * Aós realizar a criação da conexão com new Connection($config) você pode usar um dos vários métodos utilizados para se comunicar com o LDAP
         * o método utilizado para authenticar é ->auth()->attempt(username, password)
         */

        try {
            $connection = new Connection($config);
            $user = $user = $connection->query()
                ->where('samaccountname', '=', $request->username)
                ->firstOrFail();
            if (!$connection->auth()->attempt($user['distinguishedname'][0], strval($password))) {
                return redirect()->route('Login')->withErrors(['INVALID_USER' => 'Usuário ou senha incorretos']);
            }

            Cookie::queue('CID', strval($request->username), 60);
            Log::channel('ldap')->info('Cookie CID criado com sucesso! usuário autenticado');
        } catch (BindExecpt $e) {
            Log::channel('ldap')->warning('Erro ao realizar tentativa de conexão LDAP' . $e);
            echo "Usuário ou senha inváldio";
            return redirect()->route('Login')->withErrors(['LDAP_ERROR' => 'Impossível se conectar ao servidor']);
        } finally {
            echo "passa aqui de toda forma";
        }
    }
}
