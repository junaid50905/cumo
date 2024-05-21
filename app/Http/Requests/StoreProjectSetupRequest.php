<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectSetupRequest extends FormRequest
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
            'name'               => 'required',
            'seq_no'              => 'required',
            'tier_no'            => 'nullable',
            'parent_id'             => 'nullable',
            'description'              => 'nullable',
        ];
    }
}
