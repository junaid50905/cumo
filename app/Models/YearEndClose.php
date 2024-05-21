<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class YearEndClose extends Model
{
    use HasFactory;
    
    public function details(): HasMany
    {
        return $this->hasMany(YearEndColseDetails::class);
    }
    // public function Category()
    // {
    //     return $this->belongsTo(Category::class, 'category_id', 'id');
    // }
    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class, 'warehouse_id', 'id' );
    }
}
