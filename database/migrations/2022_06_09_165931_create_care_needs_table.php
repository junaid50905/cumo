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
        Schema::create('care_needs', function (Blueprint $table) {
            $table->id();
            $table->string('collection_date');
            $table->string('teacher_id')->nullable();
            $table->string('student_id')->nullable();
            $table->string('has_the_individual_had_a_previous_needs_assessment')->nullable();
            $table->string('if_so_has_a_copy_been_obtained')->nullable();
            $table->string('psychological_assessment')->nullable();
            $table->string('if_yes_report_attached')->nullable();
            $table->string('functional_assessment')->nullable();
            $table->string('sensory_checklist')->nullable();
            $table->string('social_communication')->nullable();
            $table->string('Therapy_assessment')->nullable();
            $table->json('self_understanding')->nullable();
            $table->json('eat_drink_swallow')->nullable();
            $table->string('how_many_fingers_use_to_eat')->nullable();
            $table->string('food_allergy')->nullable();
            $table->string('any_special_diet')->nullable();
            $table->string('preparation_of_meal')->nullable();
            $table->json('washing_and_bathing')->nullable();
            $table->json('brushing_teeth')->nullable();
            $table->string('hair_cut')->nullable();
            $table->string('shaving')->nullable();
            $table->string('foot_care')->nullable();
            $table->string('nails')->nullable();
            $table->json('toilet_training')->nullable();
            $table->string('separate_type_of_toilet_need')->nullable();
            $table->json('dressing')->nullable();
            $table->string('getting_up')->nullable();
            $table->string('managing_own_money')->nullable();
            $table->string('shopping')->nullable();
            $table->string('transportation')->nullable();
            $table->string('other_personal_care_of_daily_living')->nullable();
            $table->json('intrapersonal_skills')->nullable();
            $table->json('communication_skills')->nullable();
            $table->string('details_of_current_medical_treatment')->nullable();
            $table->string('details_of_past_or_long_term_medical_conditions')->nullable();
            $table->string('managing_medication')->nullable();
            $table->json('does_the_individual_have_any_history_of_the_following')->nullable();
            $table->string('vaccination_records')->nullable();
            $table->string('more_information')->nullable();
            $table->string('any_other_records')->nullable();
            $table->string('enter_more_info_if_any')->nullable();
            $table->string('sight_aids_required')->nullable();
            $table->string('hearing_aids_required')->nullable();
            $table->string('mobility_or_walking_aids_required')->nullable();
            $table->string('handling_objects_or_grip_aids_required')->nullable();
            $table->string('wheel_chair_or_any_other_aids_required')->nullable();
            $table->string('physical_pressure_areas_aids_required')->nullable();
            $table->string('weight_or_aids_or_care_required')->nullable();
            $table->string('breathing_aids_required')->nullable();
            $table->string('oral_health_aids_required')->nullable();
            $table->json('any_sensory_issues')->nullable();
            $table->json('gross_motor_skills')->nullable();
            $table->json('fine_motor_skills')->nullable();
            $table->json('eye_movements')->nullable();
            $table->json('oral_motor_activities')->nullable();
            $table->string('relationship_management')->nullable();
            $table->string('social_communication_skills')->nullable();
            $table->string('demonstrating_respect_for_self__others')->nullable();
            $table->string('demonstrating_respect_for_self__others_secondary')->nullable();
            $table->string('Recognizing_Managing_basic_Emotions')->nullable();
            $table->string('Recognizing_Managing_basic_Emotions_secondary')->nullable();
            $table->string('transition_and_changes')->nullable();
            $table->string('transition_and_changes_secondary')->nullable();
            $table->string('work_habit')->nullable();
            $table->string('additional_information')->nullable();
            $table->string('additional_information_secondary')->nullable();
            $table->string('confirmed_all_information')->nullable();
            $table->string('name_of_parent')->nullable();
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
        Schema::dropIfExists('care_needs');
    }
};
