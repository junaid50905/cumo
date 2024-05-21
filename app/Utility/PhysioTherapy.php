<?php

namespace App\Utility;

final class PhysioTherapy
{
    const NORMAL = 'Normal';
    const HYPER = 'Hyper';
    const HYPO = 'Hypo';

    const RANORMAL = 'Normal';
    const RESTRICTED = 'Restricted';

    public static array $range = [
    self:: RANORMAL => 'Normal',
    self:: RESTRICTED => 'Restricted',
    ];

    public static array $limbs = [
        self::NORMAL => 'Normal',
        self::HYPER => 'Hyper',
        self::HYPO => 'Hypo',
    ];

    const HYPER_TONE = 'Hyper Tone';
    const HYPO_TONE = 'Hypo Tone';

    public static array $limbsTone = [
        self::NORMAL => 'Normal',
        self::HYPER_TONE => 'Hyper Tone',
        self::HYPO_TONE => 'Hypo Tone',
    ];
    public static array $columnCollections = [
        'general'            => [
            'birth_history',
            'before_birth',
            'pregnancy',
            'during_birth',
            'delivery',
            'after_birth',
            'history',
            'medication_treatment',
            'any_present_medicines',
            'home_equipment',
        ],
        'visual_perception'            => [
            'visual_discrimination',
            'visual_memory',
            'visual_figure_ground',
            'visual_spatial',
            'oral_motor',
            'sucking',
            'drooling',
            'swollen',
            'chewing',
            'choking',
            'drinking',
        ],
        'activities_of_daily_living'            => [
            'eating',
            'brushing_teeth',
            'dressing',
            'toilet',
            'bathing',
            'does_the_child_attend_school',
            'enter_your_name',
             'if_yes_enter_school_name',
            'leisure_or_play_activities_of_interest',

        ],
        'strength'            => [
            'please_explain_strength_area',
        ],
        'functional_gross_motor'            => [
            'sitting',
            'crawling',
            'standing',
            'walking',
            'jumping',
            'running',
            'ball_skill'
        ],
        'transitional_movements'            => [
            'rolling_supine_to_prone',
            'prone_to_supine',
            'continuous_rolling',
            'lying_to_sit',
            'box_sit_to_stand',
            'cross_sit_to_stand',
            'kneeling_to_stand'
        ],
        'fine_motor_skill'            => [
            'dominance',
            'left',
            'right',
            'reach',
            'release',
            'symmetrical_use',
            'bilateral_use',
            'in_hand_manipulation',
            'eye_hand_co_ordination',
            'transfer',
            'writing_skill',
        ],
        'automatic_reaction'            => [
            'protective_reactions',
            'equilibrium_reaction',
        ],
        'sensory_skill_normal_hypo_response'            => [
            'tactile',
            'auditory',
            'vestibular',
            'proprioceptive',
        ],
        'cognitive_skills'            => [
            'attention',
            'problem_solving',
            'able_to_follow_instruction',
            'memory',
            'perceptual_motor',
            'body_awareness',
            'body_co_ordination',
            'bilateral_integration',
        ],
        'treatment'            => [
            'problam_list',
            'treatment_plan',
            'treatment_plann',
            'progress',
        ],
        'signature'            => [
            'therapist_signature',
            'designation',
        ],
        'muscle_power'            => [
            'musical_power_upper_limbs',
            'musical_power_upper_left',
            'musical_power_upper_right',
            'musicle_power_lower_limbs',
            'musicle_power_lower_left',
            'musicle_power_lower_right',
            'trunk_and_neck'
        ],
        'muscle_tone'            => [
            'musicle_tone_upper_limbs',
            'musicle_tone_upper_left',
            'musicle_tone_upper_right',
            'musicle_tone_lower_limbs',
            'musicle_tone_lower_left',
            'musicle_tone_lower_right',
        ],

        'behavior'            => [
            'independence',
            'social_interaction',
            'social_communication',
            'interpersonal',
        ],

        'domain_area'            => [
            'physical_gross_motor_or_fine_motor',
            'cognitive',
            'if_yes',
            'behavioral',
            'communication',
            'social',
            'emotional',
        ],

    ];
}
