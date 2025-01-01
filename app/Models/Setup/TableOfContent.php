<?php

namespace App\Models\Setup;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableOfContent extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Define the children relationship
    public function children()
    {
        return $this->hasMany(TableOfContent::class, 'parent_id');
    }

    // Optionally, define the parent relationship
    public function parent()
    {
        return $this->belongsTo(TableOfContent::class, 'parent_id');
    }
}
