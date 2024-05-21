<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            'name' => 'required',
            'supplier_type_id' => 'nullable',
            'contact_person' => 'nullable',
            'address' => 'nullable',
            'address_two' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'phone' => 'nullable',
            'phone_two' => 'nullable',
            'fax' => 'nullable',
            'designation' => 'nullable',
            'zip' => 'nullable',
            'country' => 'nullable',
            'email' => 'nullable',
            'note' => 'nullable',
            'is_active' => 'nullable',
        ];
    }
}