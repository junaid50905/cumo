<?php

use App\Models\Task;
use App\Models\Activity;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            //$table->foreignIdFor(Task::class, 'parent_task_id')->nullable()->constrained('tasks')->nullOnDelete();
            $table->string('title')->unique();
            $table->foreignIdFor(\App\Models\Activity::class)->constrained('activities')->cascadeOnDelete();
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
