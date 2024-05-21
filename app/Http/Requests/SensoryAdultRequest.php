<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SensoryAdultRequest extends FormRequest
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

            "collection_date"                                  => 'required',
            "teacher_id"                                       => 'required',
            "student_id"                                       => 'required',
            "being_touched_on_some_body_parts"                 => 'nullable',
            "hugs_and_cuddles"                                 => 'nullable',
            "certain_clothing"                                 => 'nullable',
            "clothing"                                         => 'nullable',
            "getting_hands"                                    => 'nullable',
            "grooming_activities_such"                         => 'nullable',
            "taking_bath"                                      => 'nullable',
            "getting_toweled_dry"                              => 'nullable',
            "trying_new_foods"                                 => 'nullable',
            "standing_close"                                   => 'nullable',
            "walking_barefoot"                                 => 'nullable',
            "activities"                                       => 'nullable',
            "high_risk_play"                                   => 'nullable',
            "fine_motor_tasks"                                 => 'nullable',
            "activities_requiring"                             => 'nullable',
            "eating_crunchy_foods"                             => 'nullable',
            "smooth_creamy_foods"                              => 'nullable',
            "having_eyes"                                      => 'nullable',
            "being_moved_passively"                            => 'nullable',
            "riding_equipment"                                 => 'nullable',
            "spinning_activities"                              => 'nullable',
            "activities_that_require_changes_in_head_position" => 'nullable',
            "challenges_to_balance"                            => 'nullable',
            "climbing_and_descending"                          => 'nullable',
            "being_up_high"                                    => 'nullable',
            "less_stable_ground_surfaces"                      => 'nullable',
            "riding_in_a_car"                                  => 'nullable',
            "hearing_loud_sounds—car_horns"                    => 'nullable',
            "being_in_noisy_settings"                          => 'nullable',
            "watching_TV_or_listening"                         => 'nullable',
            "speaking_or_being_spoken"                         => 'nullable',
            "background_noise"                                 => 'nullable',
            "games_with_rapid_verbal_instructions"             => 'nullable',
            "unfamiliar_sounds"                                => 'nullable',
            "singing_alone"                                    => 'nullable',
            "learning_to_read_or_reading"                      => 'nullable',
            "looking_at_shiny_spinning"                        => 'nullable',
            "activities_that_require_eye_hand"                 => 'nullable',
            "tasks_requiring_visual_analysis"                  => 'nullable',
            "activities_that_require_discriminating"           => 'nullable',
            "visually_busy_places"                             => 'nullable',
            "finding_objects_such_as_socks"                    => 'nullable',
            "very_bright_light_or_sunshine"                    => 'nullable',
            "dim_lighting"                                     => 'nullable',
            "action_packed"                                    => 'nullable',
            "new_visual_experiences"                           => 'nullable',
            "smelling_unfamiliar_scents"                       => 'nullable',
            "strong_odors_such_as_perfume"                     => 'nullable',
            "smelling_objects_that_arent_food_such_as_flowers" => 'nullable',
            "eating_new_foods"                                 => 'nullable',
            "eating_familiar_foods_Eating_strongly"            => 'nullable',
            "being_touched_on_some_body_parts_1"            => 'nullable',

            
        ];
    }
}
