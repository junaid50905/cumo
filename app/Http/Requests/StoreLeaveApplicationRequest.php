<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeaveApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'reason' =>'nullable',
            'employee' =>'nullable',
            'support_employee' =>'nullable',
            'duration_in_days' =>'nullable',
            'duration_in_hours' =>'nullable',
            'address_at_leave' =>'nullable',
            'phone_at_leave' =>'nullable',
            'available_leave_ttachment' =>'nullable',
            'type' =>'nullable',
            'start_date' =>'nullable',
            'end_date' =>'nullable',
            'duration' =>'nullable',
            'is_houe' =>'nullable',
            'avl_time' =>'nullable',
            'half_day' =>'nullable',
            'hour' =>'nullable',
            
        ];
    }
}
