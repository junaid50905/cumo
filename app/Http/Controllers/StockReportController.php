<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockReportController extends Controller
{
    public function stockCountReport()
    {
        return view('stock-management.stock_count-report');
    }
}