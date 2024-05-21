<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OccupationalTherapyRequest extends FormRequest
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

            'date' => 'required',
            'teacher_id' => 'required',
            'student_id' => 'required',
            'birth_history'  => 'nullable',
            'before_birth'  => 'nullable',
            'pregnancy'  => 'nullable',
            'delivery'  => 'nullable',
            'during_birth'  => 'nullable',
            'after_birth'  => 'nullable',
            'history'  => 'nullable',
            'medication_treatment'  => 'nullable',
            'any_present_medicines'  => 'nullable',
            'separate_home_equipment'  => 'nullable',
            'communication'  => 'nullable',
            'communication_one'  => 'nullable',
            'upper_limbs'  => 'nullable',
            'upper_left'  => 'nullable',
            'upper_right'  => 'nullable',
            'lower_limbs_one'  => 'nullable',
            'trunk_or_neck'  => 'nullable',
            'lower_limbs_two'  => 'nullable',
            'trunk_or_neck_left'  => 'nullable',
            'trunk_or_neck_right'  => 'nullable',
            'range_upper_limbs'  => 'nullable',
            'range_or_neck_left'  => 'nullable',
            'range_or_neck_right'  => 'nullable',
            'range_lower_limbs_two'  => 'nullable',
            'sitting'  => 'nullable',
            'standing'  => 'nullable',
            'ball_skill'  => 'nullable',
            'crawling'  => 'nullable',
            'walking'  => 'nullable',
            'running'  => 'nullable',
            'jumping'  => 'nullable',
            'rolling_supine_to_prone_one'  => 'nullable',
            'continuous_rolling'  => 'nullable',
            'box_sit_to_stand'  => 'nullable',
            'kneeling_to_stand'  => 'nullable',
            'prone_to_supine'  => 'nullable',
            'lying_to_sit'  => 'nullable',
            'cross_sit_to_stand'  => 'nullable',
            'rolling_supine_to_prone'  => 'nullable',
            'dominance'  => 'nullable',
            'dominance_left'  => 'nullable',
            'dominance_right'  => 'nullable',

            'reach'  => 'nullable',
            'grasp_type'  => 'nullable',
            'release'  => 'nullable',
            'symmetrical_use'  => 'nullable',
            'bilateral_use'  => 'nullable',
            'in_hand_manipulation'  => 'nullable',
            'eye_hand_co_ordination'  => 'nullable',
            'transfer'  => 'nullable',
            'writing_skills'  => 'nullable',
            'grasp_type'  => 'nullable',
            'protective_reactions'  => 'nullable',
            'equilibrium_reaction'  => 'nullable',
            'tactile'  => 'nullable',
            'visual'  => 'nullable',
            'auditory'  => 'nullable',
            'vestibular'  => 'nullable',
            'proprioceptive'  => 'nullable',
            'vestibular'  => 'nullable',
            'visual_discrimination'  => 'nullable',
            'visual_memory'  => 'nullable',
            'visual_figure_ground'  => 'nullable',
            'visual_spatial'  => 'nullable',
            'behavior'  => 'nullable',
            'social_interaction'  => 'nullable',
            'eating'  => 'nullable',
            'brushing_teeth'  => 'nullable',
            'dressing'  => 'nullable',
            'toilet'  => 'nullable',
            'bathing'  => 'nullable',
            'attend_school'  => 'nullable',
            'activities_of_interest'  => 'nullable',
            'any_more_information'  => 'nullable',
            'leisure'  => 'nullable',

            'physical'  => 'nullable',
            'cognitive'  => 'nullable',
            'strength_behavioral'  => 'nullable',
            'strength_communication'  => 'nullable',
            'social'  => 'nullable',
            'adls'  => 'nullable',
            'emotional'  => 'nullable',
            'therapist_signature'  => 'nullable',
            'designation_organization'  => 'nullable',
            'supervisor_signature'  => 'nullable',
            'designation_name'  => 'nullable',
            'attention'  => 'nullable',
            'problem_solving'  => 'nullable',
            'able_to_follow_instruction'  => 'nullable',
            'skills_memory'  => 'nullable',
            'perceptual_motor'  => 'nullable',
            'body_awareness'  => 'nullable',
            'body_co_ordination'  => 'nullable',
            'bilateral_integration'  => 'nullable',
            'problem_list'  => 'nullable',
            'treatment_plan'  => 'nullable',
            'progress'  => 'nullable',
        ];
    }
}
