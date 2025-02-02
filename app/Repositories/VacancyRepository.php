<?php

use App\Models\Vacancy;

class VacancyRepository
{
    public function __construct(private Vacancy $vacancy) {}
}
