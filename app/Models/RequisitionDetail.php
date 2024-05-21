<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequisitionDetail extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'qty','budget_sub_head_id','budget_head_id', 'sub_total', 'price', 'available_qty', 'discount'];
}
