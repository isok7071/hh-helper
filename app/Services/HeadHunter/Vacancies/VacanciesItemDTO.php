<?php

namespace App\Services\HeadHunter\Vacancies;

class VacanciesItemDTO
{
    public int $id;
    public bool $premium;
    public string $name;
    public $department;
    public bool $has_test;
    public bool $response_letter_required;
    public VacanciesItemArea $area;
    public ?VacanciesItemSalary $salary;
    public VacanciesItemType $type;
    public ?VacanciesItemAdress $address;
    public $response_url;
    public $sort_point_distance;
    public string $published_at;
    public ?string $created_at;
    public ?bool $archived;
    public string $apply_alternate_url;
    public $show_logo_in_search;
    public $insider_interview;
    public string $url;
    public string $alternate_url;
    public $relations;
    public VacanciesItemEmployer $employer;
    public $snippet;
    public $contacts;
    public $schedule;
    public $working_days;
    public $working_time_intervals;
    public $working_time_modes;
    public ?bool $accept_temporary;
    public $professional_roles;
    public bool $accept_incomplete_resumes;
    public ?VacanciesItemExperience $experience;
    public $employment;
    public $adv_response_url;
    public bool $is_adv_vacancy;
    public $adv_context;
}
