<?php

namespace App\Http\Controllers;

use App\Services\HeadHunter\HeadHunterApiClient;

class IndexController extends Controller
{
    public function index()
    {
        return dd(app()->make(
            HeadHunterApiClient::class,
            ['config' => []]
        )
            ->vacancies()->getVacancies());
    }
}
