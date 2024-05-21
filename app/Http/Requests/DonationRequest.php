<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        //        dd($this->request->all());
        return [
            'project_id'          => 'required',
            'customer_id'         => 'required',
            'date'                => 'nullable',
            'note'                => 'nullable',
            'cash'                => 'nullable',
            'cheque'              => 'nullable',
            "cheque_amount"       => "nullable",
            "cheque_no"           => 'nullable',
            "cheque_account_no"   => 'nullable',
            "cheque_account_name" => 'nullable',
            "cheque_bank_name"    => 'nullable',
        ];
    }
}
