<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeaveTypeRequest extends FormRequest
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
            'name' => 'nullable',
            'description' => 'nullable',
            'calculation_type' => 'nullable',
            'calculation_interval' => 'nullable',
            'calculation_base' => 'nullable',
            'measurement_unit' => 'nullable',
            'leave_ttl' => 'nullable',
            'max_carry_cash_day' => 'nullable',
            'leave_nature' => 'nullable',
            'is_active' => 'nullable',
        ];
    }
}
