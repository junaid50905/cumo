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
        Schema::create('care_need_part_ones', function (Blueprint $table) {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->json('common')->nullable();
            $table->json('types_of_specialty_disability_impairments')->nullable();
            $table->json('assessment')->nullable();
            $table->json('educational_information')->nullable();
            $table->json('childs_condition_at_his_family')->nullable();
            $table->json('number_of_children_in_the_family')->nullable();
            $table->json('schooling')->nullable();
            $table->json('home')->nullable();
            $table->timestamps();

            // $table->id();
            // $table->string('collection_date')->nullable();
            // $table->string('teacher_id')->nullable();
            // $table->string('student_id')->nullable();

            // $table->string('from_where_you_learned_about_us')->nullable();
            // $table->string('Doctor_physician_under_medical_treatment_name')->nullable();
            // $table->string('contact_umber')->nullable();
            // $table->string('govt_disability_registration')->nullable();
            // $table->string('If_yes_enter_registration_number')->nullable();
            // $table->string('suggestion_on_obtaining_registration')->nullable();
            // $table->string('referred_to_parents_forum')->nullable();

            // $table->string('iss_she_has_utism')->nullable();
            // $table->string('is_she_has_down_syndrome')->nullable();
            // $table->string('is_she_has_cerebral_palsy')->nullable();
            // $table->string('is_she_has_intellectual_disability')->nullable();
            // $table->string('is_she_has_dyslexia')->nullable();
            // $table->string('is_she_has_learning_disability')->nullable();
            // $table->string('is_she_has_anxiety_disorder')->nullable();
            // $table->string('is_she_has_adhd')->nullable();
            // $table->string('is_she_has_bipolar_disorder')->nullable();
            // $table->string('is_he_has_speech_disorder')->nullable();
            // $table->string('is_she_has_language_disorder')->nullable();
            // $table->string('is_she_has_eating_disorder')->nullable();
            // $table->string('is_she_has_chizophrenia')->nullable();
            // $table->string('is_she_has_multiple_personality_disorder')->nullable();
            // $table->string('is_she_has_tic_disorder')->nullable();
            // $table->string('is_she_has_sluttering')->nullable();
            // $table->string('is_she_has_depression')->nullable();
            // $table->string('is_she_has_writing_disorder')->nullable();
            // $table->string('is_she_has_reading_disorder')->nullable();
            // $table->string('is_she_has_match_disorder')->nullable();
            // $table->string('is_she_has_attachment_disorder')->nullable();
            // $table->string('is_she_has_separation_anxiety_disorder')->nullable();
            // $table->string('is_she_has_sleep_disorder')->nullable();

            // $table->string('is_social_communication_checklist_has_completed?')->nullable();
            // $table->string('is_sensory_checklist_has_completed?')->nullable();
            // $table->string('is_occupational_assessment_has_completed?')->nullable();
            // $table->string('is_speech_and_language_assessment_has_completed')->nullable();
            // $table->string('is_physiotherapy_assessment_has_ompleted')->nullable();
            // $table->string('is_fundamental_movement_skills_has_completed')->nullable();
            // $table->string('is_functional_evaluation_has_completed')->nullable();
            // $table->string('is_psychological_assessment_has_completed')->nullable();
            // $table->string('is_cademic_assessment_has_completed')->nullable();

            // $table->string('schooling')->nullable();
            // $table->string('is_she_has_speaking_capacity')->nullable();
            // $table->string('is_she_has_listening_capacity')->nullable();
            // $table->string('is_she_has_reading_capacity')->nullable();
            // $table->string('is_she_has_writing_capacity')->nullable();
            // $table->string('is_she_has')->nullable();
            // $table->string('is_she_has_counting_capacity')->nullable();
            // $table->string('is_she_has_money_concept')->nullable();
            
            // $table->string('is_she_happy_at_home')->nullable();
            // $table->string('is_she_lonely')->nullable();
            // $table->string('is_she_protective')->nullable();
            // $table->string('is_she_well_protective')->nullable();
            // $table->string('is_she_withdrawal')->nullable();
            // $table->string('is_she_confident')->nullable();
            // $table->string('is_she_Communicate')->nullable();
            // $table->string('knowledge_on_aily_life_requirement')->nullable();
            // $table->string('is_she_follow_instructions')->nullable();
            // $table->string('is_she_has_sitting_habit_and_how_long')->nullable();
            // $table->string('is_she_has_hyperness')->nullable();
            // $table->string('specify_the_cooling_process')->nullable();
            // $table->string('is_she_do_self_injury')->nullable();
            // $table->string('follow_any_specific_life_style')->nullable();
            // $table->string('what_is_the_way_of_communication')->nullable();
            // $table->string('how_he_she_can_follow_instructions')->nullable();
            // $table->string('is_she_do_temper_how_long_it_remain')->nullable();
            // $table->string('specify_the_cooling_process')->nullable();


            // $table->string('marriage_within_family_relative')->nullable();
            // $table->string('is_any_other_relative_have_disabilities')->nullable();
            // $table->string('any_other_family_information_that_may_relevant_to_share')->nullable();


            // $table->string('going_to_school')->nullable();
            // $table->string('name_of_the_school')->nullable();
            // $table->string('studied_till_which_class')->nullable();
            // $table->string('why_not_attending_school')->nullable();
            // $table->string('any_exam_degree_achieved')->nullable();

            // $table->string('separate_room')->nullable();
            // $table->string('separate_bed')->nullable();
            // $table->string('sleep_alone')->nullable();
            // $table->string('separate_cupboard')->nullable();
            // $table->string('separate_toilet')->nullable();
            // $table->string('own_equipment')->nullable();
            // $table->string('anything_else')->nullable();
            // $table->string('teachers_signature')->nullable();
            // $table->string('date')->nullable();
            // $table->string('teachers_signature')->nullable();
            // $table->string('teachers_signature_one')->nullable();
            // $table->string('teacher_name_and_designation')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('care_need_part_ones');
    }
};
