<?php

namespace App\Utility;

final class DramaDiaryEvaluation
{

    const ONE = "1";
    const TWO = "2";
    const THREE = "3";
    const FOUR = "4";
    const FIVE = "5";



    public static array $diaryType = [
        self::ONE => "1",
        self::TWO => "2",
        self::THREE => "3",
        self::FOUR => "4",
        self::FIVE => "5",

    ];


    public static array $columnCollections = [
        'basic_functional_area' => [
            'understanding_the_character',
            'understanding_the_character_secondary',
            'being_able_to_understand_the_character_and_act',
            'being_able_to_understand_the_character_and_act_secondary',
            'say_three_lines_clearly_about_yourself',
            'say_three_lines_clearly_about_yourself_secondary',
            'be_able_to_present_fluently',
            'be_able_to_present_fluently_secondary',
            'the_vowel_will_be_pronounced_clearly',
            'the_vowel_will_be_pronounced_clearly_secondary',
            'be_able_to_memorize',
            'be_able_to_memorize_secondary',
            'being_able_to_speak_with_open_mouth',
            'being_able_to_speak_with_open_mouth_secondary',
            'mouth_tongue_exercises',
            'mouth_tongue_exercises_secondary',
            'being_able_to_tell_a_minute_story',
            'being_able_to_tell_a_minute_story_secondary',
            'being_able_to_bring_variation_in_words',
            'being_able_to_bring_variation_in_words_secondary',
            'being_able_to_speak_in_regional_tenses_or_other_accents',
            'being_able_to_speak_in_regional_tenses_or_other_accents_secondary',
            'after_listening_to_the_dialogue_of_the_coartist_he_will_give_his_own_dialogue',
            'after_listening_to_the_dialogue_of_the_coartist_he_will_give_his_own_dialogue_secondary',
            'will_act_using_body_gestures',
            'will_act_using_body_gestures_secondary',
            'will_wait_for_his_turn_to_act',
            'will_wait_for_his_turn_to_act_secondary',
            'will_help_the_coartist',
            'will_help_the_coartist_secondary',
            'respect_for_the_coartist',
            'respect_for_the_coartist_secondary',
        ],
        'other_areas' => [
            'hold_attention',
            'hold_attention_secondary',
            'presentation',
            'presentation_secondary',
            'perticipating_drama',
            'perticipating_drama_secondary',
            'will_take_part_in_the_play_with_everyone',
            'will_take_part_in_the_play_with_everyone_secondary',
            'self_doing_ownwork',
            'self_doing_ownwork_secondary',
            'others',
            'others_secondary',
        ],
    ];
}
