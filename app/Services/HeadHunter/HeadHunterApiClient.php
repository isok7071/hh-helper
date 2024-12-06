<?php

namespace App\Services\HeadHunter;

use AlexMasterov\OAuth2\Client\Provider\HeadHunter;
use Illuminate\Container\Attributes\Config;

class HeadHunterApiClient
{
    public function __construct(private HeadHunter $client)
    {
    }

    public function exec(): void
    {
    }

    //TODO токен хранить как кэш можно

    private function getToken()
    {
    }
}
