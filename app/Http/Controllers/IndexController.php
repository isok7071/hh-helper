<?php

namespace App\Http\Controllers;

use App\Services\HeadHunter\HeadHunterApiClient;

class IndexController extends Controller
{
    public function index()
    {
        // app()->make(HeadHunterApiClient::class, ['config' => []])
          //  ->vacancies()->getVacancies();
    }
}
