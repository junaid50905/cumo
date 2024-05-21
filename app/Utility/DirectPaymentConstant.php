<?php

namespace App\Utility;

final class DirectPaymentConstant
{
    const CASH_PAYMENT = 'Cash Payment';
    const ADVANCE_PAYMENT = 'Advance Payment';
    const BANK_TO_BANK_TRANSFER = 'Bank to Bank Transfer';

    public static array $paymentType = [
        self::CASH_PAYMENT => 'Cash Payment',
        self::ADVANCE_PAYMENT => 'Advance Payment',
        self::BANK_TO_BANK_TRANSFER => 'Bank to Bank Transfer',
    ];
}
