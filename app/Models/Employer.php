<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
