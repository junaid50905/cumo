<?php

namespace App\Utility;

final class AssigntaskConstant
{
    const HAS_RIGHT_STRUCTURE = 'আকার, গঠন ঠিক আছে কিনা';
    const HAS_RIGHT_SHAPE = 'আকৃতি আকৃতিঃ ঠিক আছে কিনা';
    const HAS_PATIENTS_TILL_END = 'লিখা শেষ করার ধৈর্য : ঠিক আছে কিনা';

    public static array $hasWriteAbilities = [
        self::HAS_RIGHT_STRUCTURE => 'আকার, গঠন ঠিক আছে কিনা',
        self::HAS_RIGHT_SHAPE => 'আকৃতি আকৃতিঃ ঠিক আছে কিনা',
        self::HAS_PATIENTS_TILL_END => 'লিখা শেষ করার ধৈর্য : ঠিক আছে কিনা',
    ];

}