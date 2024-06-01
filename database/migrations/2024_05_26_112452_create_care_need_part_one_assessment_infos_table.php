<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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
        Schema::create('care_need_part_one_assessment_infos', function (Blueprint $table) {
            $table->id();
            $table->string('social_communication_checklist')->nullable();
            $table->string('sensory_checklist')->nullable();
            $table->string('occupational_assessment')->nullable();
            $table->string('speech_language_assessment')->nullable();
            $table->string('physiotherapy_assessment')->nullable();
            $table->string('fundamental_movement_skills')->nullable();
            $table->string('fundamental_evaluation')->nullable();
            $table->string('psychological_assessment')->nullable();
            $table->string('academic_assessment')->nullable();

            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->unsignedBigInteger('main_teacher_id')->nullable();
            $table->unsignedBigInteger('assistant_teacher_id')->nullable();
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('set null');
            $table->foreign('main_teacher_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('assistant_teacher_id')->references('id')->on('users')->onDelete('set null');

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
        Schema::dropIfExists('care_need_part_one_assessment_infos');
    }
};
