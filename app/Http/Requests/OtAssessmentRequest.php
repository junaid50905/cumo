<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OtAssessmentRequest extends FormRequest
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
            "date"                         => 'nullable',
            "teacher_id"                   => 'nullable',
            "type_of_disability"           => 'nullable',
            "educational_status"           => 'nullable',
            "sitting_posture_maintain"     => 'nullable',
            "oint_mobility_shoulder"       => 'nullable',
            "elbow"                        => 'nullable',
            "wrist"                        => 'nullable',
            "finger"                       => 'nullable',
            "body_flexibility"             => 'nullable',
            "dynamic_balance_maintain"     => 'nullable',
            "eye_hand_co_ordination"       => 'nullable',
            "mouse_operater"               => 'nullable',
            "muscle_strength_in_hand"      => 'nullable',
            "hand_function"                => 'nullable',
            "grasp"                        => 'nullable',
            "manipulation"                 => 'nullable',
            "opp_one"                      => 'nullable',
            "transfer"                      => 'nullable',
            "weight_carry"                      => 'nullable',
            "sensory"                      => 'nullable',
            "tactile"                      => 'nullable',
            "visual"                      => 'nullable',
            "auditory"                      => 'nullable',
            "sitting_habit_in_specific"    => 'nullable',
            "keep_attention"               => 'nullable',
            "follow_instruction"           => 'nullable',
            "response_skill"               => 'nullable',
            "understand_or_follow"         => 'nullable',
            "interest_of_work"             => 'nullable',
            "information_receives_ability" => 'nullable',
            "memorizing_the_information"   => 'nullable',
            "awareness_of_risk_hazard"     => 'nullable',
            "opposition_two"               => 'nullable',
            "working_table"                => 'nullable',
            "Keyboard_and_mouse"           => 'nullable',
            "monitor_place"                => 'nullable',
            "cpu"                          => 'nullable',
            "communication_style"          => 'nullable',
            "therapist_comments"           => 'nullable',
            "signature_of_therapist"       => 'nullable',
            "name_and_date"                => 'nullable',
            "organization_Name"            => 'nullable',
            "signature_of_supervisor"      => 'nullable',
            "name"                         => 'nullable',
            "designation"                  => 'nullable',
        ];
    }
}
