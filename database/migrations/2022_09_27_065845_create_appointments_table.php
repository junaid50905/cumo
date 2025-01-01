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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->boolean('is_first_payment')->default(0);
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();

            $table->string('student_id')->unique();
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('father_edu_level')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_nid')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_edu_level')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_nid')->nullable();
            $table->string('parent_email')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('diagnosis')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('dob')->nullable();
            $table->string('nid_birth')->nullable();
            $table->string('suborno_nagorik_card')->nullable();
            $table->string('suborno_nagorik_card_number')->nullable();
            $table->string('age');
            $table->string('phone_number');
            $table->string('emergency_contact_one')->nullable();
            $table->string('emergency_contact_two')->nullable();
            $table->string('emergency_contact_three')->nullable();
            $table->string('interview_date')->nullable();
            $table->enum('interview_status', ['Pending', 'Processing', 'Completed'])->default('Pending');
            $table->enum('assessment_status', ['Pending', 'Processing', 'Completed'])->default('Pending');
            
            $table->softDeletes();
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
        Schema::dropIfExists('appointments');
    }
};
