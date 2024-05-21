<?php

use App\Models\User;
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
        Schema::create('assign_interviewers', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->unique();
            $table->string('main_teacher_department');
            $table->string('main_teacher_id');
            $table->string('assistant_teacher_department')->nullable();
            $table->string('assistant_teacher_id')->nullable();
            $table->string('event_title');
            $table->string('interview_medium');
            $table->string('event_date');
            $table->string('event_start_time');
            $table->string('event_end_time');
            $table->string('is_approved')->default(0);
            $table->foreignIdFor(User::class, 'created_by')->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('assign_interviewers');
    }
};
