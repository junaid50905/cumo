<?php

namespace App\Models;

use App\Models\SupplierPayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchase extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(PurchaseDetail::class);
    }

    public function requisition(): BelongsTo
    {
        return $this->belongsTo(Requisition::class);
    }

    public function supplierPayment(): HasMany
    {
        return $this->hasMany(SupplierPayment::class);
    }

    public function return(): HasMany
    {
        return $this->hasMany(PurchaseReturn::class);
    }
}
