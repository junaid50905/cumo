<?php

use App\Models\User;
use App\Models\Student;
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
        Schema::create('sensory_adults', function (Blueprint $table) {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('being_touched_on_some_body_parts')->nullable();
            $table->string('hugs_and_cuddles')->nullable();
            $table->string('certain_clothing')->nullable();
            $table->string('clothing')->nullable();
            $table->string('getting_hands')->nullable();
            $table->string('grooming_activities_such')->nullable();
            $table->string('taking_bath')->nullable();
            $table->string('getting_toweled_dry')->nullable();
            $table->string('trying_new_foods')->nullable();
            $table->string('standing_close')->nullable();
            $table->string('walking_barefoot')->nullable();
            $table->string('activities')->nullable();
            $table->string('high_risk_play')->nullable();
            $table->string('fine_motor_tasks')->nullable();
            $table->string('activities_requiring')->nullable();
            $table->string('eating_crunchy_foods')->nullable();
            $table->string('smooth_creamy_foods')->nullable();
            $table->string('having_eyes')->nullable();
            $table->string('being_moved_passively')->nullable();
            $table->string('riding_equipment')->nullable();
            $table->string('spinning_activities')->nullable();
            $table->string('activities_that_require_changes_in_head_position')->nullable();
            $table->string('challenges_to_balance')->nullable();
            $table->string('climbing_and_descending')->nullable();
            $table->string('being_up_high')->nullable();
            $table->string('less_stable_ground_surfaces')->nullable();
            $table->string('riding_in_a_car')->nullable();
            $table->string('hearing_loud_sounds—car_horns')->nullable();
            $table->string('hearing_loud_sounds')->nullable();
            $table->string('being_in_noisy_settings')->nullable();
            $table->string('watching_TV_or_listening')->nullable();
            $table->string('speaking_or_being_spoken')->nullable();
            $table->string('background_noise')->nullable();
            $table->string('games_with_rapid_verbal_instructions')->nullable();
            $table->string('unfamiliar_sounds')->nullable();
            $table->string('singing_alone')->nullable();
            $table->string('learning_to_read_or_reading')->nullable();
            $table->string('looking_at_shiny_spinning')->nullable();
            $table->string('activities_that_require_eye_hand')->nullable();
            $table->string('tasks_requiring_visual_analysis')->nullable();
            $table->string('activities_that_require_discriminating')->nullable();
            $table->string('visually_busy_places')->nullable();
            $table->string('finding_objects_such_as_socks')->nullable();
            $table->string('very_bright_light_or_sunshine')->nullable();
            $table->string('dim_lighting')->nullable();
            $table->string('action_packed')->nullable();
            $table->string('new_visual_experiences')->nullable();
            $table->string('smelling_unfamiliar_scents')->nullable();
            $table->string('strong_odors_such_as_perfume')->nullable();
            $table->string('smelling_objects_that_arent_food_such_as_flowers')->nullable();
            $table->string('eating_new_foods')->nullable();
            $table->string('eating_familiar_foods_Eating_strongly')->nullable();
            $table->timestamps();
            $table->string('being_touched_on_some_body_parts_1')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensory_adults');
    }
};
