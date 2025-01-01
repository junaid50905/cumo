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
        Schema::create('care_need_part_one_specialities', function (Blueprint $table) {
            $table->id();
            $table->string('is_autism')->nullable();
            $table->string('is_down_syndrome')->nullable();
            $table->string('is_cerebral_palsy')->nullable();
            $table->string('is_intellectual_disability')->nullable();
            $table->string('is_dyslexia')->nullable();
            $table->string('is_learning_disability')->nullable();
            $table->string('is_anxiety_disorder')->nullable();
            $table->string('is_adhd')->nullable();
            $table->string('is_bipolar_disorder')->nullable();
            $table->string('is_speech_disorder')->nullable();
            $table->string('is_language_disorder')->nullable();
            $table->string('is_ocd')->nullable();
            $table->string('is_eating_disorder')->nullable();
            $table->string('is_schizophrenia')->nullable();
            $table->string('is_multiple_personality')->nullable();
            $table->string('is_tic_disorder')->nullable();
            $table->string('is_sluttering')->nullable();
            $table->string('is_depression')->nullable();
            $table->string('is_writing_disorder')->nullable();
            $table->string('is_reading_disorder')->nullable();
            $table->string('is_match_disorder')->nullable();
            $table->string('is_attachment_disorder')->nullable();
            $table->string('is_separation_anxiety')->nullable();
            $table->string('is_sleep_disorder')->nullable();
            $table->string('specialities_report')->nullable();


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
        Schema::dropIfExists('care_need_part_one_specialities');
    }
};
