<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DramaDiaryEvaluationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "date"                                                                                    => 'nullable',
            "teacher_id"                                                                              => 'nullable',
            "candidate_id"                                                                            => 'nullable',
            "understanding_the_character"                                                             => 'nullable',
            "understanding_the_character_secondary"                                                   => 'nullable',
            "being_able_to_understand_the_character_and_act"                                          => 'nullable',
            "being_able_to_understand_the_character_and_act_secondary"                                => 'nullable',
            "say_three_lines_clearly_about_yourself"                                                  => 'nullable',
            "say_three_lines_clearly_about_yourself_secondary"                                        => 'nullable',
            "be_able_to_present_fluently"                                                             => 'nullable',
            "be_able_to_present_fluently_secondary"                                                   => 'nullable',
            "the_vowel_will_be_pronounced_clearly"                                                    => 'nullable',
            "the_vowel_will_be_pronounced_clearly_secondary"                                          => 'nullable',
            "be_able_to_memorize"                                                                     => 'nullable',
            "be_able_to_memorize_secondary"                                                           => 'nullable',
            "being_able_to_speak_with_open_mouth"                                                     => 'nullable',
            "being_able_to_speak_with_open_mouth_secondary"                                           => 'nullable',
            "mouth_tongue_exercises"                                                                  => 'nullable',
            "mouth_tongue_exercises_secondary"                                                        => 'nullable',
            "being_able_to_tell_a_minute_story"                                                       => 'nullable',
            "being_able_to_tell_a_minute_story_secondary"                                             => 'nullable',
            "being_able_to_bring_variation_in_words"                                                  => 'nullable',
            "being_able_to_bring_variation_in_words_secondary"                                        => 'nullable',
            "being_able_to_speak_in_regional_tenses_or_other_accents"                                 => 'nullable',
            "being_able_to_speak_in_regional_tenses_or_other_accents_secondary"                       => 'nullable',
            "after_listening_to_the_dialogue_of_the_coartist_he_will_give_his_own_dialogue"           => 'nullable',
            "after_listening_to_the_dialogue_of_the_coartist_he_will_give_his_own_dialogue_secondary" => 'nullable',
            "will_act_using_body_gestures"                                                            => 'nullable',
            "will_act_using_body_gestures_secondary"                                                  => 'nullable',
            "will_wait_for_his_turn_to_act"                                                           => 'nullable',
            "will_wait_for_his_turn_to_act_secondary"                                                 => 'nullable',
            "will_help_the_coartist"                                                                  => 'nullable',
            "will_help_the_coartist_secondary"                                                        => 'nullable',
            "respect_for_the_coartist"                                                                => 'nullable',
            "respect_for_the_coartist_secondary"                                                      => 'nullable',
            "hold_attention"                                                                          => 'nullable',
            "hold_attention_secondary"                                                                => 'nullable',
            "presentation"                                                                            => 'nullable',
            "presentation_secondary"                                                                  => 'nullable',
            "perticipating_drama"                                                                     => 'nullable',
            "perticipating_drama_secondary"                                                           => 'nullable',
            "will_take_part_in_the_play_with_everyone"                                                => 'nullable',
            "will_take_part_in_the_play_with_everyone_secondary"                                      => 'nullable',
            "self_doing_ownwork"                                                                      => 'nullable',
            "self_doing_ownwork_secondary"                                                            => 'nullable',
            "others"                                                                                  => 'nullable',
            "others_secondary"                                                                        => 'nullable',
        ];
    }
}
