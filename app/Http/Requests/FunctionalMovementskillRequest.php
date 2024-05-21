<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FunctionalMovementskillRequest extends FormRequest
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
            "collection_date"                => 'required',
            "teacher_id"                     => 'required',
            "student_id"                     => 'required',
            "functional_movement_general_1"  => 'nullable',
            "functional_movement_general_2"  => 'nullable',
            "functional_movement_general_3"  => 'nullable',
            "functional_movement_general_4"  => 'nullable',
            "functional_movement_general_5"  => 'nullable',
            "functional_movement_general_6"  => 'nullable',
            "functional_movement_general_7"  => 'nullable',
            "functional_movement_general_8"  => 'nullable',

            "functional_movement_foot_1" => 'nullable',
            "functional_movement_foot_2" => 'nullable',
            "functional_movement_foot_3" => 'nullable',
            "functional_movement_foot_4" => 'nullable',
            "functional_movement_foot_5" => 'nullable',
            "functional_movement_foot_6" => 'nullable',

            "functional_movement_ankle_1" => 'nullable',
            "functional_movement_ankle_2" => 'nullable',
            "functional_movement_ankle_3" => 'nullable',
            "functional_movement_ankle_4" => 'nullable',
            "functional_movement_ankle_5" => 'nullable',
            "functional_movement_ankle_6" => 'nullable',

            "functional_movement_knee_11" => 'nullable',
            "functional_movement_knee_12" => 'nullable',
            "functional_movement_knee_13" => 'nullable',
            "functional_movement_knee_14" => 'nullable',
            "functional_movement_knee_15" => 'nullable',
            "functional_movement_knee_16" => 'nullable',

            "functional_movement_knee_21" => 'nullable',
            "functional_movement_knee_22" => 'nullable',
            "functional_movement_knee_23" => 'nullable',
            "functional_movement_knee_24" => 'nullable',
            "functional_movement_knee_25" => 'nullable',
            "functional_movement_knee_26" => 'nullable',
            
            "functional_movement_knee_31" => 'nullable',
            "functional_movement_knee_32" => 'nullable',
            "functional_movement_knee_33" => 'nullable',
            "functional_movement_knee_34" => 'nullable',
            "functional_movement_knee_35" => 'nullable',
            "functional_movement_knee_36" => 'nullable',

            "functional_movement_hip_11" => 'nullable',
            "functional_movement_hip_12" => 'nullable',
            "functional_movement_hip_13" => 'nullable',
            "functional_movement_hip_14" => 'nullable',
            "functional_movement_hip_15" => 'nullable',
            "functional_movement_hip_16" => 'nullable',

            "functional_movement_hip_21" => 'nullable',
            "functional_movement_hip_22" => 'nullable',
            "functional_movement_hip_23" => 'nullable',
            "functional_movement_hip_24" => 'nullable',
            "functional_movement_hip_25" => 'nullable',
            "functional_movement_hip_26" => 'nullable',

            "functional_movement_low_back_11" => 'nullable',
            "functional_movement_low_back_12" => 'nullable',
            "functional_movement_low_back_13" => 'nullable',
            "functional_movement_low_back_14" => 'nullable',
            "functional_movement_low_back_15" => 'nullable',
            "functional_movement_low_back_16" => 'nullable',

            "functional_movement_low_back_21" => 'nullable',
            "functional_movement_low_back_22" => 'nullable',
            "functional_movement_low_back_23" => 'nullable',
            "functional_movement_low_back_24" => 'nullable',
            "functional_movement_low_back_25" => 'nullable',
            "functional_movement_low_back_26" => 'nullable',

            "functional_movement_mid_back_1" => 'nullable',
            "functional_movement_mid_back_2" => 'nullable',
            "functional_movement_mid_back_3" => 'nullable',
            "functional_movement_mid_back_4" => 'nullable',
            "functional_movement_mid_back_5" => 'nullable',
            "functional_movement_mid_back_6" => 'nullable',
            
            "functional_movement_shoulder_11" => 'nullable',
            "functional_movement_shoulder_12" => 'nullable',
            "functional_movement_shoulder_13" => 'nullable',
            "functional_movement_shoulder_14" => 'nullable',
            "functional_movement_shoulder_15" => 'nullable',
            "functional_movement_shoulder_16" => 'nullable',
            
            "functional_movement_shoulder_21" => 'nullable',
            "functional_movement_shoulder_22" => 'nullable',
            "functional_movement_shoulder_23" => 'nullable',
            "functional_movement_shoulder_24" => 'nullable',
            "functional_movement_shoulder_25" => 'nullable',
            "functional_movement_shoulder_26" => 'nullable',
        ];
    }
}
