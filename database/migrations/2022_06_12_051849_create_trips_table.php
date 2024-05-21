<?php

use Illuminate\Foundation\Auth\User;
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
        Schema::create('trips', function (Blueprint $table) {

            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->json('activities_of_daily_living')->nullable();
            $table->json('only_for_staff')->nullable();
            $table->json('activities')->nullable();
            $table->json('security_safety')->nullable();
            $table->json('equipment')->nullable();
            $table->json('light')->nullable();
            $table->json('kitchen')->nullable();
            $table->json('bathroom')->nullable();
            $table->json('floor')->nullable();
            $table->json('instrumental_activities_of_daily')->nullable();
            $table->json('environmental_safety_relative')->nullable();
            $table->json('environmental_safety_step')->nullable();
            $table->json('woke_up_in_the_morning')->nullable();
            $table->json('reading_writing')->nullable();
            $table->json('daily_work')->nullable();
            $table->json('won_work')->nullable();
            $table->json('lunch_time')->nullable();
            $table->json('rest_time')->nullable();
            $table->json('afternoon')->nullable();
            $table->json('evening')->nullable();
            $table->json('constructive_work')->nullable();
            $table->json('dinner')->nullable();
            $table->json('after_dinner')->nullable();
            $table->json('signature')->nullable();
            $table->json('trip_evaluation_signature')->nullable();

            $table->string('special_educator_team')->nullable();
            $table->string('special_educator_team_name')->nullable();
            $table->string('guardian')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('note_if_any')->nullable();
            $table->string('signature_teacher')->nullable();
            $table->string('signature_teacher_name_or_designation')->nullable();
            $table->string('supervisor_signature')->nullable();
            $table->string('supervisor_signature_name_or_designation')->nullable();
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
        Schema::dropIfExists('trips');
    }
};
