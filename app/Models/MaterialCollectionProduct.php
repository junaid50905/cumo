<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaterialCollectionProduct extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','available_qty', 'qty'];

    public function materialCollect()
    {
        return $this->belongsTo(MaterialCollection::class, 'material_collection_id', 'id');
    }
}
