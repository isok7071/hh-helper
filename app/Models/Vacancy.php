<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $external_id
 * @property string $name
 * @property string $url
 * @property int $employer_id
 * @property string|null $salaryFrom
 * @property string|null $salaryTo
 * @property int|null $gross
 * @property string|null $currency
 * @property string $adress_raw
 * @property int $experience_id
 * @property string $published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\VacancyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereAdressRaw($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereEmployerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereExperienceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereExternalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereGross($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereSalaryFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereSalaryTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacancy whereUrl($value)
 * @mixin \Eloquent
 */
class Vacancy extends Model
{
    /** @use HasFactory<\Database\Factories\VacancyFactory> */
    use HasFactory;
}
