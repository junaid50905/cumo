<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Task::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\TaskType::class)->constrained()->cascadeOnDelete();
            $table->string('time');
            $table->string('sequence');
            $table->string('quantity');
            $table->string('quality');
            $table->string('time_taken');
            $table->string('target');
            $table->string('activity_type');
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
        Schema::dropIfExists('task_details');
    }
};
