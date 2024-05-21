<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChartofAccountsRequest extends FormRequest
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
            'reporting_connection'            => 'nullable',
            'account_category'            => 'nullable',
            'budget_link'            => 'nullable',
            'account_code'            => 'required|unique:chartof_accounts',
            'account_group'            => 'nullable',
            'parent_account'            => 'nullable',
            'account_name'            => 'required|unique:chartof_accounts',
            'opening_balance'            => 'nullable',
            'current_balance'            => 'nullable',
            'sequence_no'            => 'nullable',
            'account_type'            => 'nullable',
            'btnradio'            => 'nullable',
        ];
    }
}
