<?php

namespace App\Services\HeadHunter\Vacancies;

use App\Services\HeadHunter\AbstractService;


class VacanciesService extends AbstractService
{
    private const URI = '/vacancies';

    public function getVacancies(
        array $queryParams = [
            'describe_arguments' => true,
            'clusters' => true,
            'text' => '"Программист PHP"'
        ]
    ): VacanciesDTO {
        return $this->mapper->map(
            json_decode(
                $this->client->exec('GET', self::URI, $queryParams)
            ),
            new VacanciesDTO()
        );
    }

    public function getVacancy(int $id)
    {
        return $this->client->exec('GET', self::URI);
    }
}
