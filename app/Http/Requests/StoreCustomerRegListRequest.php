<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRegListRequest extends FormRequest
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
        'name'             => 'nullable',
        'mobile'           => 'nullable',
        'address_1'        => 'nullable',
        'city'             => 'nullable',
        'state'            => 'nullable',
        'phone_1'          => 'nullable',
        'email'            => 'nullable',
        'select'           => 'nullable',
        'address'          => 'nullable',
        'zip_code'         => 'nullable',
        'country'          => 'nullable',
        'phone_2'          => 'nullable',
        'advance'          => 'nullable',
        'is_card_allow'    => 'nullable',
        'is_active'        => 'nullable',
        ];

    }
}
