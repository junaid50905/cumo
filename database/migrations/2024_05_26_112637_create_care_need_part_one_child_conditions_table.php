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
        Schema::create('care_need_part_one_child_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('happy_at_home')->nullable();
            $table->string('lonely')->nullable();
            $table->string('protective')->nullable();
            $table->string('well_protective')->nullable();
            $table->string('withdrawal')->nullable();
            $table->string('confident')->nullable();
            $table->string('communicate')->nullable();
            $table->string('knowledge_daily_life_requirement')->nullable();
            $table->string('follow_instructions')->nullable();
            $table->string('how_can_follow_instructions')->nullable();
            $table->string('sitting_habit')->nullable();
            $table->string('sitting_habit_if_yes_how_long')->nullable();
            $table->string('sh_if_others_specify_duration')->nullable();
            $table->string('hyperness')->nullable();
            $table->string('hyperness_if_yes_how_long')->nullable();
            $table->string('hyperness_if_other_cooling_time')->nullable();
            $table->string('hyperness_specify_cooling_process')->nullable();
            $table->string('tantrum')->nullable();
            $table->string('tantrum_if_yes_how_long')->nullable();
            $table->string('tantrum_if_other_cooling_time')->nullable();
            $table->string('tantrum_specify_cooling_process')->nullable();
            $table->string('self_injury')->nullable();
            $table->string('self_injury_if_yes_how_long')->nullable();
            $table->string('self_injury_if_other_cooling_time')->nullable();
            $table->string('self_injury_specify_cooling_process')->nullable();
            $table->string('specific_life_style')->nullable();
            $table->string('communication_way')->nullable();
            $table->string('temper')->nullable();
            $table->string('temper_if_yes_how_long')->nullable();
            $table->string('temper_if_other_cooling_time')->nullable();
            $table->string('temper_cooling_process')->nullable();
            $table->string('hit_other')->nullable();
            $table->string('hit_other_if_other_cooling_time')->nullable();
            $table->string('hit_other_cooling_process')->nullable();

            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->unsignedBigInteger('main_teacher_id')->nullable();
            $table->unsignedBigInteger('assistant_teacher_id')->nullable();

            // Define foreign keys with more unique names
            $table->foreign('appointment_id', 'fk_cnpc_appointment')->references('id')->on('appointments')->onDelete('set null');
            $table->foreign('main_teacher_id', 'fk_cnpc_main_teacher')->references('id')->on('users')->onDelete('set null');
            $table->foreign('assistant_teacher_id', 'fk_cnpc_assistant_teacher')->references('id')->on('users')->onDelete('set null');

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
        Schema::dropIfExists('care_need_part_one_child_conditions');
    }
};

