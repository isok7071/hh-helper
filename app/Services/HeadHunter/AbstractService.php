<?php

namespace App\Services\HeadHunter;

use App\Services\HeadHunter\HeadHunterApiClient;

abstract class AbstractService
{
    public function __construct(protected HeadHunterApiClient $client)
    {
    }
}
