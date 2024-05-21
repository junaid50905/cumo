<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWeekendPackageRequest extends FormRequest
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
            'package_name' => 'required',
            'sunday' => 'nullable',
            'monday' => 'nullable',
            'tuesday' => 'nullable',
            'wednesday' => 'nullable',
            'thursday' => 'nullable',
            'friday' => 'nullable',
            'saturday' => 'nullable'
        ];
    }
}
