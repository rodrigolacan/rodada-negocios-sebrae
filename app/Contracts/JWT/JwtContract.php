<?php

namespace App\Contracts\JWT;

interface JwtContract
{
    public function decode($token, $keyPath): array;
}
