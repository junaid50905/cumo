<?php

namespace App\Utility;

final class ProductTypeConstants
{
    public static array $productType = [
        'SERVICE'=>'Service',
        'INVENTORYITEM'=>'Inventory item',
        'NONINVENTORYITEM'=>'Non-inventory item',
        'OTHERCHARGES' => 'Other charges',
        'SUBTOTAL' => 'Sub total',
        'GROUP' => 'Group',
        'DISCOUNT' => 'Discount',
        'FIXEDASSET' => 'Fixed asset',
        'INHOUSEPRODUCTION' => 'Inhouse production'
    ];
}
