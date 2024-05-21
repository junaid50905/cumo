<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        return view('accounting.income.sale_voucher');
    }
}
