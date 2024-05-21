<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    // public function detail(): HasOne
    // {
    //     return $this->hasOne(TaskDetail::class);
    // }

    // public function parentTask(): BelongsTo
    // {
    //     return $this->belongsTo(Task::class, 'parent_task_id', 'id');
    // }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
