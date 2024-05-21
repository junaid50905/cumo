<?php

namespace App\Utility;

final class SensoryYoungAdult
{
    const AVOIDS = "AVOIDS";
    const SEEKS = "SEEKS";
    const MIXE = "MIXED";
    const NEUTRAL = "NEUTRAL";

    public static array $young = [
        self::AVOIDS => 'AVOIDS',
        self::SEEKS => 'SEEKS',
        self::MIXE => 'MIXED',
        self::NEUTRAL => 'NEUTRAL',
    ];
}
