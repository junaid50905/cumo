<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssignTaskRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            "student_id"                                => 'nullable',
            "assignment_name"                           => 'nullable',
            "start_date"                                => 'nullable',
            "end_date"                                  => 'nullable',
            "instruction"                               => 'nullable',
            "organized_play"                            => 'nullable',
            "jumping_jacks"                             => 'nullable',
            "fitness_physical_activity"                 => 'nullable',
            "body_awareness"                            => 'nullable',
            "physical_growth"                           => 'nullable',
            "good_touch"                                => 'nullable',
            "decision_making"                           => 'nullable',
            "generalization_ability"                    => 'nullable',
            "functional_reading_skills"                 => 'nullable',
            "includes_fine_motor_skills"                => 'nullable',
            "time_skills"                               => 'nullable',
            "respond"                                   => 'nullable',
            "verbs"                                     => 'nullable',
            "listening_skills"                          => 'nullable',
            "request"                                   => 'nullable',
            "speaking"                                  => 'nullable',
            "pragmatic_communication"                   => 'nullable',
            "washing_showering"                         => 'nullable',
            "basic_first_aid_knowledgee"                => 'nullable',
            "preparation_skills"                        => 'nullable',
            "cooking_preparation"                       => 'nullable',
            "intrapersonal"                             => 'nullable',
            "prompting"                                 => 'nullable',
            "modeling"                                  => 'nullable',
            "emotions"                                  => 'nullable',
            "social_awareness"                          => 'nullable',
            "interpersonal_skill"                       => 'nullable',
            "games_how_to_play_with_others"             => 'nullable',
            "sharing_personal_issues"                   => 'nullable',
            "self_development"                          => 'nullable',
            "adaptations"                               => 'nullable',
            "fundamental_movement_exercisel"            => 'nullable',
            "yoga"                                      => 'nullable',
            "craft_activities"                          => 'nullable',
            "assertiveness"                             => 'nullable',
            "functional_reading_skillss"                => 'nullable',
            "money_management_skills"                   => 'nullable',
            "shaving_routing"                           => 'nullable',
            "basic_first_aid_knowledge"                 => 'nullable',
            "meal_preparation_skills"                   => 'nullable',
            "serving_food"                              => 'nullable',
            "self_awareness_intrapersonal"              => 'nullable',
            "self_esteem_intrapersonal"                 => 'nullable',
            "self_regulation_intrapersonal"             => 'nullable',
            "managing_death_of_family_members"          => 'nullable',
            "managing_death_of_relative_friends"        => 'nullable',
            "interpersonal_skills"                      => 'nullable',
            "handle_accept_different_situation"         => 'nullable',
            "understand_social_deviation"               => 'nullable',
            "how_to_play_with_others"                   => 'nullable',
            "me_and_you"                                => 'nullable',
            "ethical_values"                            => 'nullable',
            "work_readiness_ethical_values"             => 'nullable',
            "home_maintenance_self_development"         => 'nullable',
            "cleaning_washing_chores_self_development"  => 'nullable',
            "telephone_skills_self_development"         => 'nullable',
        ];
    }
}
