<?php

namespace App\Enums;

enum ExperienceNameEnum: string
{
    case NO_EXPERIENCE = "noExperience";
    case BEETWEEN_1_AND_3 = "between1And3";
    case BEETWEEN_3_AND_6 = "between3And6";
    case MORE_THAN_6 = "moreThan6";
}
