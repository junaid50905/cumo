<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\AssignTask;
use App\Models\Task;
use App\Models\RoutineDetail;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_task_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AssignTask::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Task::class);
            $table->foreignIdFor(RoutineDetail::class);
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('assign_task_details');
    }
};
