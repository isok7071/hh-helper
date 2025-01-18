<?php

namespace App\Services\HeadHunter\Vacancies;

class VacanciesItemAdress
{
    public ?string $building;
    public ?string $city;
    public ?string $description;
    public ?string $id;
    public ?float $lat;
    public ?float $lng;
    public ?VacanciesItemMetro $metro;

    /**
     * @var VacanciesItemMetro[]|null
     */
    public ?array $metro_stations;
    public ?string $raw;
    public ?string $street;
}
