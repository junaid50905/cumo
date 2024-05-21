<?php

namespace App\Utility;

final class PhysioTherapyConstants
{
    public static array $general_play = [
        'General Play' => 'Yes',
        self::NO  => 'No',
    ];

    public static array $organized_play = [
        'Organized Play' => 'Yes',
        self::NO  => 'No',
    ];

    public static array $leaky_guts = [
        'Leaky Guts' => 'Yes',
        self::NO  => 'No',
    ];

    //area mapping
    public static array $gross_motor_skills = [
        'Gross Motor Skills' => 'Yes',
        self::NO  => 'No',
    ];

    //sundomain mapping
    public static array $motor_planning = [
        'Motor Planning' => 'Yes',
        self::NO  => 'No',
    ];
    //subdomain mapping
    public static array $sensory_skills = [
        'Sensory Skills' => 'Yes',
        self::NO  => 'No',
    ];
}