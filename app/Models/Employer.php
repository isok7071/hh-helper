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
 * @property int $trusted
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\EmployerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereExternalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereTrusted($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employer whereUrl($value)
 * @mixin \Eloquent
 */
class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'external_id',
        'url',
    ];

    protected function casts(): array
    {
        return [
            'external_id' => 'int'
        ];
    }
    //TODO dates
}
