<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleIncomeDetail extends Model
{
    use HasFactory;

    // protected $fillable = ['category_id', 'product_id', 'available_qty', 'qty', 'price', 'discount', 'sub_total'];
    protected $guarded = [];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function saleIncome(): BelongsTo
    {
        return $this->belongsTo(SaleIncome::class);
    }
}
