<?php

namespace App\Services\HeadHunter\Vacancies;

use App\Services\HeadHunter\AbstractService;


class VacanciesService extends AbstractService
{
    private const URI = '/vacancies';

    public function getVacancies()
    {
        return $this->client->exec('GET', self::URI);
    }
}
