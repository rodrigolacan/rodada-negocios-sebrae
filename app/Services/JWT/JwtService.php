<?php

namespace App\Services\JWT;

use App\Contracts\JWT\JwtContract;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\SignatureInvalidException;
use Firebase\JWT\BeforeValidException;
use Illuminate\Support\Facades\Log;

/**
 * Documentação do firebase-jwt.
 * Doc:https://github.com/firebase/php-jwt
 * 
 */
class JwtService implements JwtContract
{
    public function decode($token, $keyPath): array
    {
        // Lê a chave pública do arquivo
        $publicKeyPEM = file_get_contents($keyPath);

        try {
            // Tenta decodificar o token
            $decoded = JWT::decode($token, new Key($publicKeyPEM, 'RS256'));
            $decoded_array = (array) $decoded;
            return $decoded_array; // Retorna o token decodificado
        } catch (ExpiredException $e) {
            // Token expirado
            Log::channel('jwt')->warning('token expirado: ' . $e->getMessage());
            throw new \Exception('Token expirado.', 401);
        } catch (SignatureInvalidException $e) {
            // Assinatura do token inválida
            throw new \Exception('Assinatura do token inválida.', 401);
            Log::channel('jwt')->warning('Assinatura do token inválida: ' . $e->getMessage());
        } catch (BeforeValidException $e) {
            // Token ainda não é válido
            throw new \Exception('Token não é válido ainda.', 401);
            Log::channel('jwt')->warning('Token não é valido ainda: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Captura qualquer outra exceção
            throw new \Exception('Erro inesperado: ' . $e->getMessage(), 500);
            Log::channel('jwt')->warning('Erro inesperado: ' . $e->getMessage());
        }
    }
}
