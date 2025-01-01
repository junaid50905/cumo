<?php

namespace App\Traits;

use Illuminate\Support\Collection;

trait CommonFunctionTrait
{
    public function mapIncomeTypeToText($incomeType)
    {
        // dd($incomeType);
        switch ($incomeType) {
            case 1:
                return 'Interview';
            case 2:
                return 'Assessment';
            case 3:
                return 'Observation';
            default:
                return null;
        }
    }

    public function mapEventTypeToText($eventType)
    {
        // dd($incomeType);
        switch ($eventType) {
            case 1:
                return 'Interview';
            case 2:
                return 'Assessment';
            case 3:
                return 'Observation';
            default:
                return null;
        }
    }

    public function mapPaymentStatusToText($paymentStatus)
    {
        switch ($paymentStatus) {
            case 1:
                return 'Pending';
            case 2:
                return 'Processing';
            case 3:
                return 'Cancel';
            case 4:
                return 'Failed';
            case 5:
                return 'Completed';
            default:
                return null;
        }
    }
}