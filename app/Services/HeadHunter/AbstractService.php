<?php

namespace App\Services\HeadHunter;

use App\Services\HeadHunter\HeadHunterApiClient;
use JsonMapper;

abstract class AbstractService
{
    public function __construct(
        protected HeadHunterApiClient $client,
        protected JsonMapper $mapper
    ) {
        $this->mapper->bStrictNullTypes = false; //TODO fix
    }
}
