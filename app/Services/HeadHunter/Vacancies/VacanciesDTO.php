<?php

namespace App\Services\HeadHunter\Vacancies;

class VacanciesDTO
{
    /** @var VacanciesItemDTO[] */
    public array $items;
    public int $found;
    public int $pages;
    public int $page;
    public int $per_page;
    public $clusters;
    public $arguments;
    public $fixes;
    public $suggests;
    public ?string $alternate_url;
}
