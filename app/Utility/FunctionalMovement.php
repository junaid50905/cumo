<?php

namespace App\Utility;

final class FunctionalMovement
{

    const TRYDO = 'Try 1: Can do';
    const TRYNOTDO = 'Try 1: Can not do';
    const TRY2DO = 'Try 2: Can do';
    const TRY2NOTDO = 'Try 2: Can not do';

    public static array $accidentOrIncident = [
        self::TRYDO => 'Try 1: Can do',
        self::TRYNOTDO => 'Try 1: Can not do',
        self::TRY2DO => 'Try 2: Can do',
        self::TRY2NOTDO => 'Try 2: Can not do',
    ];

}
