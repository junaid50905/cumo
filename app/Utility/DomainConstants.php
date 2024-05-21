<?php

namespace App\Utility;

final class DomainConstants
{
    public static array $domains = [
        'domain_001' => [
            '001_sub_domain_001',
            '001_sub_domain_002',
            '001_sub_domain_003',
        ],
        'domain_002' => [
            '002_sub_domain_001',
            '002_sub_domain_002',
            '002_sub_domain_003',
        ],
    ];

    public static array $areas = [
        '001_sub_domain_001' => [
            '001_area_001',
            '001_area_002',
        ],
        '001_sub_domain_002' => [
            '002_area_001',
            '002_area_002',
        ],
    ];

    public static array $activities = [
        '001_area_001' => [
            '001_activity_001',
            '001_activity_002',
            '001_activity_003',
        ],
        '001_area_002' => [
            '002_activity_001',
            '002_activity_002',
            '002_activity_003',
        ],
    ];
}
