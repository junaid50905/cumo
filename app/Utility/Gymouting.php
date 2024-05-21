<?php

namespace App\Utility;

final class Gymouting
{

    const MAXASSISTANCE = 'Need maximum assistance';
    const PARASSISTANCE = 'Partial assistance';
    const VERPROMPT = 'Verbal prompt';
    const OBSERVATION = 'Pictorial observation';
    const INDEPENDENT = 'Completely independent';

    public static array $assistance = [
        self::MAXASSISTANCE   => 'Need maximum assistance',
        self::PARASSISTANCE => 'Partial assistance',
        self::VERPROMPT  => 'Verbal prompt',
        self::OBSERVATION  => 'Pictorial observation',
        self::INDEPENDENT  => 'Completely independent',

    ];
}