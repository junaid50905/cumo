<?php

namespace App\Models;

use App\Models\Project;
use App\Models\Warehouse;
use App\Models\StockTransferDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockTransfer extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(StockTransferDetail::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function warehouseFrom(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class, 'warehouse_id_from', 'id');
    }
    public function warehouseTo(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class, 'warehouse_id_to', 'id');
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'warehouse_id_to', 'id');
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'warehouse_id_to', 'id');
    }
}
