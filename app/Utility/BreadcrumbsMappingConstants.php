<?php

namespace App\Utility;

final class BreadcrumbsMappingConstants
{
    public static array $mappings = [
        'student.appointment' => [
            'pageHeader' => 'Sample Page Header',
            'base'       => [
                'Utility' => '#',
            ],
            'items'      => [
                'one' => '#',
                'two' => '#',
            ],
        ],
    ];
}
