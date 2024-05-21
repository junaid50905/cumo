<?php

namespace App\Utility;

final class ExecutiveFunctionTest
{
    const OFTEN = "Often";
    const NOT_OFTEN = "Not often";
    const AGREE = "Agree";
    const DISAGREE = "Disagree";

    public static array $oftenOrNot = [
        self::OFTEN => "Often",
        self::NOT_OFTEN => "Not often",
    ];
    public static array $agreeOrNot = [
        self::AGREE => "Agree",
        self::DISAGREE => "Disagree",
    ];
}
