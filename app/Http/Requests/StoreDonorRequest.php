<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonorRequest extends FormRequest
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

            'name'        => 'required',
            'phone_1'        => 'required',
            'email'        => 'required',
            'phone_2'        => 'required',
            'address_1'        => 'required',
            'city'        => 'nullable',
            'state'        => 'nullable',
            'address'        => 'required',
            'zip_code'        => 'nullable',
            'is_card_allow'        => 'nullable',
            'advance'        => 'nullable',
            'is_active'        => 'nullable',
            'medical_allowance'        => 'nullable',

        ];
    }
}
