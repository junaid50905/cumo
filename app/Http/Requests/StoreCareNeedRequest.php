<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCareNeedRequest extends FormRequest
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
            "collection_date"                                       => 'required|string',
            "teacher_id"                                            => 'required|exists:users,id',
            "student_id"                                            => 'required|exists:students,id',
            "has_the_individual_had_a_previous_needs_assessment"    => 'nullable',
            "if_so_has_a_copy_been_obtained"                        => 'nullable',
            "psychological_assessment"                              => 'nullable',
            "if_yes_report_attached"                                => 'nullable',
            "functional_assessment"                                 => 'nullable',
            "sensory_checklist"                                     => 'nullable',
            "social_communication"                                  => 'nullable',
            "Therapy_assessment"                                    => 'nullable',
            "self_understanding"                                    => 'nullable',
            "eat_drink_swallow"                                     => 'nullable',
            "how_many_fingers_use_to_eat"                           => 'nullable',
            "food_allergy"                                          => 'nullable',
            "any_special_diet"                                      => 'nullable',
            "preparation_of_meal"                                   => 'nullable',
            "washing_and_bathing"                                   => 'nullable',
            "brushing_teeth"                                        => 'nullable',
            "hair_cut"                                              => 'nullable',
            "shaving"                                               => 'nullable',
            "foot_care"                                             => 'nullable',
            "nails"                                                 => 'nullable',
            "toilet_training"                                       => 'nullable',
            "separate_type_of_toilet_need"                          => 'nullable',
            "dressing"                                              => 'nullable',
            "getting_up"                                            => 'nullable',
            "managing_own_money"                                    => 'nullable',
            "shopping"                                              => 'nullable',
            "transportation"                                        => 'nullable',
            "other_personal_care_of_daily_living"                   => 'nullable',
            "intrapersonal_skills"                                  => 'nullable',
            "communication_skills"                                  => 'nullable',
            "details_of_current_medical_treatment"                  => 'nullable',
            "details_of_past_or_long_term_medical_conditions"       => 'nullable',
            "managing_medication"                                   => 'nullable',
            "does_the_individual_have_any_history_of_the_following" => 'nullable',
            "vaccination_records"                                   => 'nullable',
            "more_information"                                      => 'nullable',
            "any_other_records"                                     => 'nullable',
            "enter_more_info_if_any"                                => 'nullable',
            "sight_aids_required"                                   => 'nullable',
            "hearing_aids_required"                                 => 'nullable',
            "mobility_or_walking_aids_required"                     => 'nullable',
            "handling_objects_or_grip_aids_required"                => 'nullable',
            "wheel_chair_or_any_other_aids_required"                => 'nullable',
            "physical_pressure_areas_aids_required"                 => 'nullable',
            "weight_or_aids_or_care_required"                       => 'nullable',
            "breathing_aids_required"                               => 'nullable',
            "oral_health_aids_required"                             => 'nullable',
            "any_sensory_issues"                                    => 'nullable',
            "gross_motor_skills"                                    => 'nullable',
            "fine_motor_skills"                                     => 'nullable',
            "eye_movements"                                         => 'nullable',
            "oral_motor_activities"                                 => 'nullable',
            "relationship_management"                               => 'nullable',
            "social_communication_skills"                           => 'nullable',
            "demonstrating_respect_for_self__others"                => 'nullable',
            "demonstrating_respect_for_self__others_secondary"      => 'nullable',
            "Recognizing_Managing_basic_Emotions"                   => 'nullable',
            "Recognizing_Managing_basic_Emotions_secondary"         => 'nullable',
            "transition_and_changes"                                => 'nullable',
            "transition_and_changes_secondary"                      => 'nullable',
            "work_habit"                                            => 'nullable',
            "additional_information"                                => 'nullable',
            "additional_information_secondary"                      => 'nullable',
            "confirmed_all_information"                             => 'nullable',
            "name_of_parent"                                        => 'nullable',
        ];
    }
}
