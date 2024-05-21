<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SaleIncome extends Model
{
    use HasFactory;

    // protected $fillable = ['customer_id', 'ship_to_address', 'warehouse_id'];
    protected $guarded = [];

    public function details(): HasMany
    {
        return $this->hasMany(SaleIncomeDetail::class);
    }

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function income(): BelongsTo
    {
        return $this->belongsTo(Income::class);
    }
}
