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
        Schema::create('occupational_therapies', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->constrained('students')->cascadeOnDelete();
            $table->json('general')->nullable();
            $table->json('muscle_tone')->nullable();
            $table->json('range_of_movement')->nullable();
            $table->json('functional_gross_motor')->nullable();
            $table->json('transitional_movements')->nullable();
            $table->json('fine_motor_skill')->nullable();
            $table->json('automatic_reaction')->nullable();
            $table->json('sensory_skill')->nullable();
            $table->json('visual_perception')->nullable();
            $table->json('activities_of_daily_living')->nullable();
            $table->json('strength')->nullable();
            $table->json('signature')->nullable();
            $table->json('cognitive_skills')->nullable();
            $table->json('treatment_Plan')->nullable();
            $table->timestamps();

            // $table->string('communication')->nullable();
            // $table->string('separate_home_equipment')->nullable();
            // $table->string('sitting')->nullable();
            // $table->string('standing')->nullable();
            // $table->string('ball_skill')->nullable();
            // $table->string('crawling')->nullable();
            // $table->string('walking')->nullable();
            // $table->string('running')->nullable();
            // $table->string('jumping')->nullable();


            
             $table->string("separate_home_equipment")->nullable();


             $table->string("communication")->nullable();

        
             $table->string("sitting")->nullable();

            
             $table->string("standing")->nullable();


             $table->string("ball_skill")->nullable();

            
             $table->string("crawling")->nullable();

            
             $table->string("walking")->nullable();

            
            
             $table->string("running")->nullable();

            
             $table->string("jumping")->nullable();

            
        
            
             $table->string("continuous_rolling")->nullable();

            
             $table->string("box_sit_to_stand")->nullable();

            
             $table->string("kneeling_to_stand")->nullable();

            
             $table->string("prone_to_supine")->nullable();

            
             $table->string("lying_to_sit")->nullable();

            
             $table->string("cross_sit_to_stand")->nullable();

            
             $table->string("rolling_supine_to_prone")->nullable();

            
             $table->string("reach")->nullable();


             $table->string("relese")->nullable();

        
             $table->string("symmetrical_use")->nullable();


             $table->string("bilateral_use")->nullable();

            
             $table->string("in_hand_manipulation")->nullable();

            
             $table->string("eye_hand_co_ordination")->nullable();


             $table->string("transfer")->nullable();

            
            
             $table->string("writing_skills")->nullable();

            
             $table->string("grasp_type")->nullable();

            
             $table->string("protective_reactions")->nullable();

            
             $table->string("equilibrium_reaction")->nullable();

            
             $table->string("tactile")->nullable();

            
             $table->string("visual")->nullable();

            
             $table->string("auditory")->nullable();

            
             $table->string("proprioceptive")->nullable();

            
             $table->string("vestibular")->nullable();

            
             $table->string("visual_discrimination")->nullable();

            
             $table->string("visual_memory")->nullable();

            
             $table->string("visual_figure_ground")->nullable();

            
             $table->string("visual_spatial")->nullable();

        
             $table->string("social_interaction")->nullable();

            
             $table->string("eating")->nullable();

            
             $table->string("brushing_teeth")->nullable();

            
             $table->string("dressing")->nullable();

            
             $table->string("toilet")->nullable();

            
             $table->string("bathing")->nullable();

            
             $table->string("does_the_child_attend_school")->nullable();

            
            

             $table->string("(gross_motor_or_fine_motor)")->nullable();

             $table->string("physical_(gross_motor_or_fine_motor)")->nullable();

            
            
             $table->string("social")->nullable();


             $table->string("adls")->nullable();

            
             $table->string("attention")->nullable();

            
             $table->string("problem_solving")->nullable();

            
             $table->string("able_to_follow_instruction")->nullable();


             $table->string("memory")->nullable();


             $table->string("perceptual_motor")->nullable();

            
             $table->string("body_awareness")->nullable();

            
             $table->string("body_co_ordination")->nullable();

            
             $table->string("bilateral_integration")->nullable();

   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occupational_therapies');
    }
};
