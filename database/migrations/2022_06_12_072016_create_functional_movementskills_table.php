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
        Schema::create('functional_movementskills', function (Blueprint $table) {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->constrained('students')->cascadeOnDelete();
            $table->boolean('is_approved')->default(0);

            $table->string('functional_movement_general_1')->nullable();
            $table->string('functional_movement_general_2')->nullable();
            $table->string('functional_movement_general_3')->nullable();
            $table->string('functional_movement_general_4')->nullable();
            $table->string('functional_movement_general_5')->nullable();
            $table->string('functional_movement_general_6')->nullable();
            $table->string('functional_movement_general_7')->nullable();
            $table->string('functional_movement_general_8')->nullable();

            $table->string('functional_movement_foot_1')->nullable();
            $table->string('functional_movement_foot_2')->nullable();
            $table->string('functional_movement_foot_3')->nullable();
            $table->string('functional_movement_foot_4')->nullable();
            $table->string('functional_movement_foot_5')->nullable();
            $table->string('functional_movement_foot_6')->nullable();

            $table->string('functional_movement_ankle_1')->nullable();
            $table->string('functional_movement_ankle_2')->nullable();
            $table->string('functional_movement_ankle_3')->nullable();
            $table->string('functional_movement_ankle_4')->nullable();
            $table->string('functional_movement_ankle_5')->nullable();
            $table->string('functional_movement_ankle_6')->nullable();

            $table->string('functional_movement_knee_11')->nullable();
            $table->string('functional_movement_knee_12')->nullable();
            $table->string('functional_movement_knee_13')->nullable();
            $table->string('functional_movement_knee_14')->nullable();
            $table->string('functional_movement_knee_15')->nullable();
            $table->string('functional_movement_knee_16')->nullable();

            $table->string('functional_movement_knee_21')->nullable();
            $table->string('functional_movement_knee_22')->nullable();
            $table->string('functional_movement_knee_23')->nullable();
            $table->string('functional_movement_knee_24')->nullable();
            $table->string('functional_movement_knee_25')->nullable();
            $table->string('functional_movement_knee_26')->nullable();
            
            $table->string('functional_movement_knee_31')->nullable();
            $table->string('functional_movement_knee_32')->nullable();
            $table->string('functional_movement_knee_33')->nullable();
            $table->string('functional_movement_knee_34')->nullable();
            $table->string('functional_movement_knee_35')->nullable();
            $table->string('functional_movement_knee_36')->nullable();

            $table->string('functional_movement_hip_11')->nullable();
            $table->string('functional_movement_hip_12')->nullable();
            $table->string('functional_movement_hip_13')->nullable();
            $table->string('functional_movement_hip_14')->nullable();
            $table->string('functional_movement_hip_15')->nullable();
            $table->string('functional_movement_hip_16')->nullable();

            $table->string('functional_movement_hip_21')->nullable();
            $table->string('functional_movement_hip_22')->nullable();
            $table->string('functional_movement_hip_23')->nullable();
            $table->string('functional_movement_hip_24')->nullable();
            $table->string('functional_movement_hip_25')->nullable();
            $table->string('functional_movement_hip_26')->nullable();

            $table->string('functional_movement_low_back_11')->nullable();
            $table->string('functional_movement_low_back_12')->nullable();
            $table->string('functional_movement_low_back_13')->nullable();
            $table->string('functional_movement_low_back_14')->nullable();
            $table->string('functional_movement_low_back_15')->nullable();
            $table->string('functional_movement_low_back_16')->nullable();

            $table->string('functional_movement_low_back_21')->nullable();
            $table->string('functional_movement_low_back_22')->nullable();
            $table->string('functional_movement_low_back_23')->nullable();
            $table->string('functional_movement_low_back_24')->nullable();
            $table->string('functional_movement_low_back_25')->nullable();
            $table->string('functional_movement_low_back_26')->nullable();

            $table->string('functional_movement_mid_back_1')->nullable();
            $table->string('functional_movement_mid_back_2')->nullable();
            $table->string('functional_movement_mid_back_3')->nullable();
            $table->string('functional_movement_mid_back_4')->nullable();
            $table->string('functional_movement_mid_back_5')->nullable();
            $table->string('functional_movement_mid_back_6')->nullable();
            

            $table->string('functional_movement_shoulder_11')->nullable();
            $table->string('functional_movement_shoulder_12')->nullable();
            $table->string('functional_movement_shoulder_13')->nullable();
            $table->string('functional_movement_shoulder_14')->nullable();
            $table->string('functional_movement_shoulder_15')->nullable();
            $table->string('functional_movement_shoulder_16')->nullable();
            
            $table->string('functional_movement_shoulder_21')->nullable();
            $table->string('functional_movement_shoulder_22')->nullable();
            $table->string('functional_movement_shoulder_23')->nullable();
            $table->string('functional_movement_shoulder_24')->nullable();
            $table->string('functional_movement_shoulder_25')->nullable();
            $table->string('functional_movement_shoulder_26')->nullable();

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
        Schema::dropIfExists('functional_movementskills');
    }
};
