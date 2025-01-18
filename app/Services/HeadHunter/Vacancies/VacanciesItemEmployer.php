<?php

namespace App\Services\HeadHunter\Vacancies;

class VacanciesItemEmployer
{
	public int $id;
	public string $name;
	public string $url;
	public string $alternate_url;
	public ?object $logo_urls;
	public string $vacancies_url;
	public bool $accredited_it_employer;
	public bool $trusted;
}
