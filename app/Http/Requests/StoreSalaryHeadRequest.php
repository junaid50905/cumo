<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSalaryHeadRequest extends FormRequest
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
            'head_name' => 'required',
            'head_name_bangla' => 'required',
            'default_amount' => 'nullable',
            'account' => 'nullable',
            'head_nature' => 'nullable',
            'is_other_payment' => 'nullable',
            'description' => 'nullable',
        ];
    }
}
