<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCareNeedPart1Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "collection_date"                                               => 'nullable',
            "teacher_id"                                                    => 'nullable',
            "student_id"                                                    => 'nullable',

            "from_where_you_learned_about_us"                               => 'nullable',
            "from_where_you_learned_about_us_secondary"                                         => 'nullable',
            "contact_umber"                                                 => 'nullable',
            "doctor_physician_under_medical_treatment_name"                 => 'nullable',
            "govt_disability_registration"                                  => 'nullable',
            "govt_disability_registration_secondary"                        => 'nullable',
            "If_yes_enter_registration_number"                              => 'nullable',
            "suggestion_on_obtaining_registration"                          => 'nullable',
            "referred_to_parents_forum"                                     => 'nullable',

            "iss_she_has_utism"                                             => 'nullable',
            "is_she_has_down_syndrome"                                      => 'nullable',
            "is_she_has_cerebral_palsy"                                     => 'nullable',
            "is_she_has_intellectual_disability"                            => 'nullable',
            "is_she_has_dyslexia"                                           => 'nullable',
            "is_she_has_learning_disability"                                => 'nullable',
            "is_she_has_anxiety_disorder"                                   => 'nullable',
            "is_she_has_adhd"                                               => 'nullable',
            "is_she_has_bipolar_disorder"                                   => 'nullable',
            "is_he_has_speech_disorder"                                     => 'nullable',
            "is_she_has_language_disorder"                                  => 'nullable',
            "is_she_has_ocd"                                                => 'nullable',
            "is_she_has_eating_disorder"                                    => 'nullable',
            "is_she_has_chizophrenia"                                       => 'nullable',
            "is_she_has_multiple_personality_disorder"                      => 'nullable',
            "is_she_has_tic_disorder"                                       => 'nullable',
            "is_she_has_sluttering"                                         => 'nullable',
            "is_she_has_depression"                                         => 'nullable',
            "is_she_has_writing_disorder"                                   => 'nullable',
            "is_she_has_reading_disorder"                                   => 'nullable',
            "is_she_has_match_disorder"                                     => 'nullable',
            "is_she_has_attachment_disorder"                                => 'nullable',
            "is_she_has_separation_anxiety_disorder"                        => 'nullable',
            "is_she_has_sleep_disorder"                                     => 'nullable',

            "is_social_communication_checklist_has_completed"               => 'nullable',
            "is_sensory_checklist_has_completed"                            => 'nullable',
            "is_occupational_assessment_has_completed"                      => 'nullable',
            "is_speech_and_language_assessment_has_completed"               => 'nullable',
            "is_physiotherapy_assessment_has_completed"                     => 'nullable',
            "is_fundamental_movement_skills_has_completed"                  => 'nullable',
            "is_functional_evaluation_has_completed"                        => 'nullable',
            "is_psychological_assessment_has_completed"                     => 'nullable',
            "is_cademic_assessment_has_completed"                           => 'nullable',

            "schooling"                                                     => 'nullable',
            "is_she_has_speaking_capacity"                                  => 'nullable',
            "is_she_has_reading_capacity"                                   => 'nullable',
            "is_she_has"                                                    => 'nullable',
            "is_she_has_counting_capacity"                                  => 'nullable',
            "is_she_has_money_concept"                                      => 'nullable',
            
            "is_she_happy_at_home"                                          => 'nullable',
            "is_she_lonely"                                                 => 'nullable',
            "is_she_protective"                                             => 'nullable',
            "is_she_well_protective"                                        => 'nullable',
            "is_she_withdrawal"                                             => 'nullable',
            "is_she_confident"                                              => 'nullable',
            "is_she_Communicate"                                            => 'nullable',
            "knowledge_on_aily_life_requirement"                            => 'nullable',
            "is_she_follow_instructions"                                    => 'nullable',
            "is_she_ has_sitting_habit_and_how_long"                        => 'nullable',
            "is_she_has_hyperness"                                          => 'nullable',
            "specify_the_cooling_process"                                   => 'nullable',
            "is_she_do_tantrum"                                             => 'nullable',
            "specify_the_cooling_process"                                   => 'nullable',
            "is_she_do_self_injury"                                         => 'nullable',
            "follow_any_specific_life_style"                                => 'nullable',
            "what_is_the_way_of_communication"                              => 'nullable',
            "how_he_she_can_follow_instructions"                            => 'nullable',
            "is_she_do_temper_how_long_it_remain"                           => 'nullable',
            "specify_the_cooling_process"                                   => 'nullable',
            
            "is_she_hit_others"                                             => 'nullable',
            "age"                                                           => 'nullable',
            "is_your_other_child_support_towards_sibling"                   => 'nullable',
            "marriage_within_family_relative"                               => 'nullable',
            "is_any_other_relative_have_disabilities"                       => 'nullable',
            "family_economical_condition"                                   => 'nullable',
            "any_other_family_information_that_may_relevant_to_share"       => 'nullable',

            "going_to_school"                                               => 'nullable',
            "if_other_enter_name"                                           => 'nullable',
            "name_of_the_school"                                            => 'nullable',
            "studied_till_which_class"                                      => 'nullable',
            "why_not_attending_school"                                      => 'nullable',
            "any_exam_degree_achieved"                                      => 'nullable',

            "separate_room"                                                 => 'nullable',
            "separate_bed"                                                  => 'nullable',
            "sleep_alone"                                                   => 'nullable',
            "separate_cupboard"                                             => 'nullable',
            "separate_toilet"                                               => 'nullable',
            "own_equipment"                                                 => 'nullable',
            "anything_else"                                                 => 'nullable',
            "teachers_signature"                                            => 'nullable',
            "teacher_name_and_designation"                                  => 'nullable',
            "date"                                                          => 'nullable',
            "parents_signature"                                             => 'nullable',
            "parent_name_and_designation"                                   => 'nullable',

        ];
    }
}
