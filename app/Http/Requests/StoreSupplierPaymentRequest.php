<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierPaymentRequest extends FormRequest
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
            'project_id' => 'required',
            'supplier_id' => 'required',
            'date' => 'required',
            'purchase_id' => 'nullable',
            'invoice_num' => 'required',
            'remark' => 'nullable',
            'note' => 'nullable',
            'cheque' => 'nullable',
            'cheque_amount' => 'nullable',
            'cheque_no' => 'nullable',
            'cheque_account_no' => 'nullable',
            'cheque_account_name' => 'nullable',
            'cheque_bank_name' => 'nullable',
        ];
    }
}
