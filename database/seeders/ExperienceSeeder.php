<?php

namespace Database\Seeders;

use App\Enums\ExperienceNameEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('experiences')->insert([
            ['id' => 1, 'name' => ExperienceNameEnum::NO_EXPERIENCE],
            ['id' => 2, 'name' => ExperienceNameEnum::BEETWEEN_1_AND_3],
            ['id' => 3, 'name' => ExperienceNameEnum::BEETWEEN_3_AND_6],
            ['id' => 4, 'name' => ExperienceNameEnum::MORE_THAN_6],
        ]);
    }
}
