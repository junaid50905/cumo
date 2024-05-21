<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanySetupRequest extends FormRequest
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
            "company_name"               => 'nullable',
            "total_department"           => 'nullable',
            "manager"                    => 'nullable',
            "street_1"                   => 'nullable',
            "street_2"                   => 'nullable',
            "city"                       => 'nullable',
            "zip_code"                   => 'nullable',
            "state"                      => 'nullable',
            "country"                    => 'nullable',
            "email"                      => 'nullable',
            "phone_1"                    => 'nullable',
            "phone_2"                    => 'nullable',
            "fax"                        => 'nullable',
            "mobile"                     => 'nullable',
            "website_address"            => 'nullable',
            "project_id"                 => 'nullable',
            "logo"                       => 'nullable',
        ];
    }
}
