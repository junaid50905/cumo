<?php

namespace App\Utility;

final class IndividualRiskAssessmentForm
{

    const ACCIDENT = 'Accident';
    const INCIDENT = 'Incident';

    public static array $accidentOrIncident = [
        self::ACCIDENT => 'Accident',
        self::INCIDENT => 'Incident',
    ];

    const MOTOR = 'Motor Skills related';
    const COGNITIVE = 'Intellectual / cognitive';
    const SENSORY = 'Sensory Related';
    const RELATED = 'Intrapersonal related';
    const ACADEMIC = 'Academic related';
    const COMMUNICATION = 'Communication related';
    const AGGRESSIVENESS = 'Aggressiveness and tantrum related';
    const EMOTIONAL = 'Emotional related';
    const BEHAVIOR = 'Behavior related ';
    const LIVING = 'Daily Living related';


    public static array $riskAssessment = [
        self::MOTOR => 'Motor Skills related',
        self::COGNITIVE => 'Intellectual / cognitive',
        self::SENSORY => 'Sensory Related',
        self::RELATED => 'Academic related',
        self::ACADEMIC => 'Communication related',
        self::COMMUNICATION => 'Aggressiveness and tantrum related',
        self::AGGRESSIVENESS => 'Emotional related',
        self::EMOTIONAL => 'Behavior related ',
        self::BEHAVIOR => 'Incident',
        self::LIVING => 'Daily Living related',

    ];

    const CERTAIN = 'Almost Certain';
    const LIKELY = 'Likely';
    const POSSIBLE = 'Possible';
    const UNLIKELY = 'Unlikely';
    const RARE = 'Rare';


    public static array $likelihood = [
        self::CERTAIN => 'Almost Certain',
        self::LIKELY => 'Likely',
        self::POSSIBLE => 'Possible',
        self::UNLIKELY => 'Unlikely',
        self::RARE => 'Rare',

    ];

    const INSIGNIFICANT = 'Insignificant';
    const MINOR = 'Minor';
    const SIGNIFICANT = 'Significant';
    const MAJOR = 'Major';
    const SEVERE = 'Severe';


    public static array $consu = [
        self::INSIGNIFICANT => 'Insignificant',
        self::MINOR => 'Minor',
        self::SIGNIFICANT => 'Significant',
        self::MAJOR => 'Major',
        self::SEVERE => 'Severe',

    ];

}
