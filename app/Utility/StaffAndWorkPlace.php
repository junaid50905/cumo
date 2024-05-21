<?php

namespace App\Utility;

use Illuminate\Support\Arr;

final class StaffAndWorkPlace
{
    const YES = "হ্যাঁ";
    const NO = "না";
    const NOTAPPLICABLE = "প্রযোজ্য নয়";

    public static array $staffAndWorkplace = [
        self::YES => 'হ্যাঁ',
        self::NO  => 'না',
        self::NOTAPPLICABLE => 'প্রযোজ্য নয়',
    ];
}
