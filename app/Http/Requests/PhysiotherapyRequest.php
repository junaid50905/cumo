<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhysiotherapyRequest extends FormRequest
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
            "collection_date"                         => 'required',
            "teacher_id"                              => 'required',
            "student_id"                              => 'required',
            "birth_history"                           => 'nullable',
            "before_birth"                            => 'nullable',
            "pregnancy"                               => 'nullable',
            "during_birth"                            => 'nullable',
            "delivery"                                => 'nullable',
            "after_birth"                             => 'nullable',
            "history"                                 => 'nullable',
            "medication_treatment"                    => 'nullable',
            "any_present_medicines"                   => 'nullable',
            "home_equipment"                          => 'nullable',
            "visual_discrimination"                   => 'nullable',
            "visual_memory"                           => 'nullable',
            "visual_figure_ground"                    => 'nullable',
            "visual_spatial"                          => 'nullable',
            "oral_motor"                              => 'nullable',
            "sucking"                                 => 'nullable',
            "drooling"                                => 'nullable',
            "swollen"                                 => 'nullable',
            "chewing"                                 => 'nullable',
            "choking"                                 => 'nullable',
            "drinking"                                => 'nullable',
            "eating"                                  => 'nullable',
            "brushing_teeth"                          => 'nullable',
            "dressing"                                => 'nullable',
            "toilet"                                  => 'nullable',
            "bathing"                                 => 'nullable',
            "does_the_child_attend_school"            => 'nullable',
            "enter_your_name"                         => 'nullable',
            "leisure_or_play_activities_of_interest" => 'nullable',
            "please_explain_strength_area"            => 'nullable',
            "sitting"                                 => 'nullable',
            "crawling"                                => 'nullable',
            "standing"                                => 'nullable',
            "walking"                                 => 'nullable',
            "jumping"                                 => 'nullable',
            "running"                                 => 'nullable',
            "ball_skill"                              => 'nullable',
            "rolling_supine_to_prone"                 => 'nullable',
            "prone_to_supine"                         => 'nullable',
            "continuous_rolling"                      => 'nullable',
            "lying_to_sit"                            => 'nullable',
            "box_sit_to_stand"                        => 'nullable',
            "cross_sit_to_stand"                      => 'nullable',
            "kneeling_to_stand"                      => 'nullable',
            "dominance"                               => 'nullable',
            "left"                                    => 'nullable',
            "right"                                   => 'nullable',
            "reach"                                   => 'nullable',
            "release"                                 => 'nullable',
            "symmetrical_use"                         => 'nullable',
            "bilateral_use"                           => 'nullable',
            "in_hand_manipulation"                    => 'nullable',
            "eye_hand_co_ordination"                  => 'nullable',
            "transfer"                                => 'nullable',
            "writing_skill"                           => 'nullable',
            "protective_reactions"                    => 'nullable',
            "equilibrium_reaction"                    => 'nullable',
            "tactile"                                 => 'nullable',
            "auditory"                                => 'nullable',
            "vestibular"                              => 'nullable',
            "proprioceptive"                          => 'nullable',
            "attention"                               => 'nullable',
            "problem_solving"                         => 'nullable',
            "able_to_follow_instruction"              => 'nullable',
            "memory"                                  => 'nullable',
            "perceptual_motor"                        => 'nullable',
            "body_awareness"                          => 'nullable',
            "body_co_ordination"                      => 'nullable',
            "bilateral_integration"                   => 'nullable',
            "problam_list"                            => 'nullable',
            "treatment_plan"                          => 'nullable',
            "treatment_plann"                         => 'nullable',
            "progress"                                => 'nullable',
            "therapist_signature"                     => 'nullable',
            "designation"                             => 'nullable',
            
            "musical_power_upper_limbs"               => 'nullable',
            "musical_power_upper_left"                => 'nullable',
            "musical_power_upper_right"               => 'nullable',
            "musicle_power_lower_limbs"               => 'nullable',
            "musicle_power_lower_left"                => 'nullable',
            "musicle_power_lower_right"               => 'nullable',
            "trunk_and_neck"                          => 'nullable',

            "musicle_tone_upper_limbs"                          => 'nullable',
            "musicle_tone_upper_left"                          => 'nullable',
            "musicle_tone_upper_right"                          => 'nullable',
            "musicle_tone_lower_limbs"                          => 'nullable',
            "musicle_tone_lower_left"                          => 'nullable',
            "musicle_tone_lower_right"                          => 'nullable',

            "lower_limbs"                             => 'nullable',
            "trunk"                                   => 'nullable',
            "independence"                            => 'nullable',
            "social_interaction"                      => 'nullable',
            "social_communication"                    => 'nullable',
            "interpersonal"                           => 'nullable',
            "physical_gross_motor_or_fine_motor"      => 'nullable',
            "cognitive"                               => 'nullable',
            "if_yes"                                  => 'nullable',
            "behavioral"                              => 'nullable',
            "communication"                           => 'nullable',
            "social"                                  => 'nullable',
            "emotional"                               => 'nullable',
            "neck"                                    => 'nullable',
        ];
    }
}
