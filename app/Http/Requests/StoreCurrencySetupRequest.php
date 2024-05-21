<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurrencySetupRequest extends FormRequest
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
            'currency_name'           => 'nullable',
            'symbol'            => 'nullable',
            'lowest_unit_name'        => 'nullable',
            'converse_amount'            => 'nullable',
            'btnradio1'            => 'nullable',
            'search'            => 'nullable',
        ];
    }
}
