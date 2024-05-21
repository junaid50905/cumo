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
        // ToDo: mismatch with validation
        Schema::create('ot_assessments', function(Blueprint $table)
        {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->string('date')->nullable();
            $table->foreignIdFor(\App\Models\User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('type_of_disability')->nullable();
            $table->string('educational_status')->nullable();
            $table->string('sitting_posture_maintain')->nullable();
            $table->string('oint_mobility_shoulder')->nullable();
            $table->string('elbow')->nullable();
            $table->string('wrist')->nullable();
            $table->string('finger')->nullable();
            $table->string('body_flexibility')->nullable();
            $table->string('dynamic_balance_maintain')->nullable();
            $table->string('eye_hand_co_ordination')->nullable();
            $table->string('mouse_operater')->nullable();
            $table->string('muscle_strength_in_hand')->nullable();
            $table->string('hand_function')->nullable();
            $table->string('grasp')->nullable();
            $table->string('manipulation')->nullable();
            $table->string('opp_one')->nullable();
            $table->string('transfer')->nullable();
            $table->string('weight_carry')->nullable();
            $table->string('sensory')->nullable();
            $table->string('tactile')->nullable();
            $table->string('visual')->nullable();
            $table->string('auditory')->nullable();
            $table->string('sitting_habit_in_specific')->nullable();
            $table->string('keep_attention')->nullable();
            $table->string('follow_instruction')->nullable();
            $table->string('response_skill')->nullable();
            $table->string('understand_or_follow')->nullable();
            $table->string('interest_of_work')->nullable();
            $table->string('information_receives_ability')->nullable();
            $table->string('memorizing_the_information')->nullable();
            $table->string('awareness_of_risk_hazard')->nullable();
            $table->string('opposition_two')->nullable();
            $table->string('working_table')->nullable();
            $table->string('Keyboard_and_mouse')->nullable();
            $table->string('monitor_place')->nullable();
            $table->string('cpu')->nullable();
            $table->string('communication_style')->nullable();
            $table->string('therapist_comments')->nullable();
            $table->string('signature_of_therapist')->nullable();
            $table->string('name_and_date')->nullable();
            $table->string('organization_Name')->nullable();
            $table->string('signature_of_supervisor')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
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
        Schema::dropIfExists('ot_assessments');
    }
};
