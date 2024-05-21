<?php

namespace App\Rules;

use App\Models\Journal;
use Illuminate\Contracts\Validation\Rule;

class JournalRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        // journal::request();
        $allCredit = array_sum(array_column(request()->journal, 'credit'));
        $allDebit = array_sum(array_column(request()->journal, 'debit'));
        $transitionAmount = request()->transaction_amount;

        return ($allDebit == $allCredit) && ($allCredit == $transitionAmount);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Total Debit And Total Credit Not Matched With Transaction Amount';
    }
}
