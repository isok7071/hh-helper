<?php

namespace App\Http\Controllers;

use App\Services\HeadHunter\HeadHunterApiClient;
use App\Services\HeadHunter\Vacancies\VacanciesQueryParamsDTO;

class IndexController extends Controller
{
    public function index()
    {
        $params = new VacanciesQueryParamsDTO();
        $params->text = '"Программист PHP"';
        $params->area = 2;

        
        return dd(app(HeadHunterApiClient::class)
            ->vacancies()->getVacancies($params->toArray()));
    }
}
