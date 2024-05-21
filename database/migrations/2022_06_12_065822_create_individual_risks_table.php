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
        Schema::create('individual_risks', function (Blueprint $table) {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('students')->cascadeOnDelete();
            $table->boolean('is_approved')->default(0);
            $table->string('hazard_spotted', 500)->nullable();
            $table->string('accident_or_incident')->nullable();
            $table->string('possible_concerns')->nullable();
            $table->string('risk_rating')->nullable();
            $table->string('causeof_hazzard')->nullable();
            $table->string('action_to_reduce_hazard')->nullable();
            $table->string('level_of_risk')->nullable();
            $table->string('likelihood')->nullable();
            $table->string('consequences')->nullable();
            $table->string('staff_signature')->nullable();
            $table->string('staff_name')->nullable();
            $table->string('signature_of_support_worker')->nullable();
            $table->string('support_worker_name')->nullable();
            $table->timestamps();

            $table->text('motor')->nullable();
            $table->text('cognitive')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individual_risks');
    }
};
