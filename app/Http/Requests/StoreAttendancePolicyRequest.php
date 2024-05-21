<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttendancePolicyRequest extends FormRequest
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
            'policy_name' => 'required',
            'over_time_start_grace' => 'nullable',
            'arrival_grace' => 'nullable',
            'lunch_break' => 'nullable',
            'lunch_time' => 'nullable',
            'working_hour' => 'nullable',
            'sun_in' => 'nullable',
            'sun_out' => 'nullable',
            'sun_is_next_day' => 'nullable',
            'mon_in' => 'nullable',
            'mon_out' => 'nullable',
            'mon_is_next_day' => 'nullable',
            'thu_in' => 'nullable',
            'thu_out' => 'nullable',
            'thu_is_next_day' => 'nullable',
            'wed_in' => 'nullable',
            'wed_out' => 'nullable',
            'wed_is_next_day' => 'nullable',
            'th_in' => 'nullable',
            'th_out' => 'nullable',
            'th_is_next_day' => 'nullable',
            'fri_in' => 'nullable',
            'fri_out' => 'nullable',
            'fri_is_next_day' => 'nullable',
            'sat_in' => 'nullable',
            'sat_out' => 'nullable',
            'sat_is_next_day' => 'nullable',
            'deduct_Leave_for' => 'nullable',
            'deduct_in_minute' => 'nullable',
            'policy_desc' => 'nullable',
        ];
    }
}
