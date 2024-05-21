<?php

use App\Models\Student;
use App\Models\User;
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
        Schema::create('physiotherapies', function(Blueprint $table)
        {
            $table->id();
            $table->date('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('students')->cascadeOnDelete();

            $table->json('general')->nullable();
            $table->json('visual_perception')->nullable();
            $table->json('activities_of_daily_living')->nullable();
            $table->json('strength')->nullable();
            $table->json('functional_gross_motor')->nullable();
            $table->json('transitional_movements')->nullable();
            $table->json('fine_motor_skill')->nullable();
            $table->json('automatic_reaction')->nullable();
            $table->json('sensory_skill_normal_hypo_response')->nullable();
            $table->json('cognitive_skills')->nullable();
            $table->json('treatment')->nullable();
            $table->json('signature')->nullable();
            $table->json('muscle_power')->nullable();
            $table->json('muscle_tone')->nullable();
            $table->json('behavior')->nullable();
            $table->json('domain_area')->nullable();

            $table->string('birth_history', 100)->nullable();
            $table->string('before_birth', 100)->nullable();
            $table->string('pregnancy', 100)->nullable();
            $table->string('during_birth', 100)->nullable();
            $table->string('delivery', 100)->nullable();
            $table->string('after_birth', 100)->nullable();
            $table->string('history', 100)->nullable();
            
            $table->string('medication_treatment', 100)->nullable();
            $table->string('any_present_medicines', 100)->nullable();
            $table->string('home_equipment', 100)->nullable();
            $table->string('visual_discrimination', 100)->nullable();
            $table->string('visual_memory', 100)->nullable();
            $table->string('visual_figure_ground', 100)->nullable();
            $table->string('visual_spatial', 100)->nullable();
            $table->string('oral_motor', 100)->nullable();
            $table->string('sucking', 100)->nullable();
            $table->string('drooling', 100)->nullable();
            $table->string('swollen', 100)->nullable();
            $table->string('chewing', 100)->nullable();
            $table->string('choking', 100)->nullable();
            $table->string('drinking', 100)->nullable();

            $table->string('eating', 100)->nullable();
            $table->string('brushing_teeth', 100)->nullable();
            $table->string('dressing', 100)->nullable();
            $table->string('toilet', 100)->nullable();
            $table->string('bathing', 100)->nullable();
            $table->string('does_the_child_attend_school', 100)->nullable();
            $table->string('enter_your_name', 100)->nullable();
            $table->string('leisure_or_play_activities_of_interest', 100)->nullable();

            $table->string('please_explain_strength_area', 100)->nullable();

            $table->string('sitting', 100)->nullable();
            $table->string('crawling', 100)->nullable();
            $table->string('standing', 100)->nullable();
            $table->string('walking', 100)->nullable();
            $table->string('jumping', 100)->nullable();
            $table->string('running', 100)->nullable();
            $table->string('ball_skill', 100)->nullable();

            $table->string('prone_to_supine', 100)->nullable();
            $table->string('continuous_rolling', 100)->nullable();
            $table->string('lying_to_sit', 100)->nullable();
            $table->string('box_sit_to_stand', 100)->nullable();
            $table->string('cross_sit_to_stand', 100)->nullable();
            $table->string('kneeling_to_stand', 100)->nullable();

            $table->string('dominance', 100)->nullable();
            $table->string('left', 100)->nullable();
            $table->string('right', 100)->nullable();
            $table->string('reach', 100)->nullable();
            $table->string('release', 100)->nullable();
            $table->string('symmetrical_use', 100)->nullable();
            $table->string('bilateral_use', 100)->nullable();
            $table->string('in_hand_manipulation', 100)->nullable();
            $table->string('eye_hand_co_ordination', 100)->nullable();
            $table->string('transfer', 100)->nullable();
            $table->string('writing_skill', 100)->nullable();

            $table->string('protective_reactions', 100)->nullable();
            $table->string('equilibrium_reaction', 100)->nullable();

            $table->string('tactile', 100)->nullable();
            $table->string('auditory', 100)->nullable();
            $table->string('vestibular', 100)->nullable();
            $table->string('proprioceptive', 100)->nullable();

            $table->string('attention', 100)->nullable();
            $table->string('problem_solving', 100)->nullable();
            $table->string('able_to_follow_instruction', 100)->nullable();
            $table->string('memory', 100)->nullable();
            $table->string('perceptual_motor', 100)->nullable();
            $table->string('body_awareness', 100)->nullable();
            $table->string('body_co_ordination', 100)->nullable();
            $table->string('bilateral_integration', 100)->nullable();

            $table->string('problam_list', 100)->nullable();
            $table->string('treatment_plan', 100)->nullable();
            $table->string('treatment_plann', 100)->nullable();
            $table->string('progress', 100)->nullable();

            $table->string('therapist_signature', 100)->nullable();
            $table->string('designation', 100)->nullable();

            $table->string('upper_limbs', 100)->nullable();
            $table->string('lower_limbs', 100)->nullable();
            $table->string('trunk', 100)->nullable();

            $table->string('independence', 100)->nullable();
            $table->string('social_interaction', 100)->nullable();
            $table->string('social_communication', 100)->nullable();
            $table->string('interpersonal', 100)->nullable();

            $table->string('physical_gross_motor_or_fine_motor', 100)->nullable();
            $table->string('cognitive', 100)->nullable();
            $table->string('if_yes', 100)->nullable();
            $table->string('behavioral', 100)->nullable();
            $table->string('communication', 100)->nullable();
            $table->string('social', 100)->nullable();
            $table->string('emotional', 100)->nullable();
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
        Schema::dropIfExists('physiotherapies');
    }
};
