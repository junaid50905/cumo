<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBonusPackageRequest extends FormRequest
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
            "package_name"           => 'required',
            'description'            => 'nullable',
            'amount'                 => 'nullable',
            'is_in_percent'          => 'nullable',
            'sal_head'               => 'nullable',
            'total_amount'           => 'nullable',
            'curnc_id'               => 'nullable',
        ];
    }
}
