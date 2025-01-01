<?php

namespace App\Http\Requests\Payments;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppointmentPaymentRequest extends FormRequest
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
                "appointment_id"      => 'required',
                "income_type"         => 'required',
                "payment_method"      => 'required',
                "amount"              => 'required',
                "payment_status"      => 'required',
                "transaction_id"      => 'required',
            ];

    }
}
