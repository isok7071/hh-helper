<?php

namespace App\Services\HeadHunter\Vacancies;

use ArrayAccess;
use Illuminate\Contracts\Support\Arrayable;

class VacanciesQueryParamsDTO implements Arrayable
{
    public int $page;
    public int $per_page;
    public string $text;
    public string $search_field;
    public string $employment;
    public string $schedule;
    public int $area;
    public string $metro;
    public string $professional_role;
    public string $industry;
    public string $employer_id;
    public string $currency;
    public int|float $salary;
    public string $label;
    public bool $only_with_salary;
    public int $period;
    public string $date_from;
    public string $date_to;
    public int|float $top_lat;
    public int|float $bottom_lat;
    public int|float $left_lng;
    public int|float $right_lng;
    public string $order_by;
    public int|float $sort_point_lat;
    public int|float $sort_point_lng;
    public bool $clusters;
    public bool $describe_arguments;
    public bool $no_magic;
    public bool $premium;
    public bool $responses_count_enabled;
    public string $part_time;
    public bool $accept_temporary;
    public string $locale;
    public string $host = "hh.ru";

    public function toArray(): array
    {
        $result = [];

        foreach ($this as $key => $value) {
            $result[$key] = $value;
        }

        return $result;
    }
}
