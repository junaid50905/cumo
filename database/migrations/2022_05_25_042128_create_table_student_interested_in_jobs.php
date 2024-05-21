<?php

use App\Models\Student;
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
        Schema::create('student_interested_in_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class)->constrained()->cascadeOnDelete();
            $table->string('disability_type')->nullable();
            $table->string('skill')->nullable();
            $table->string('work_interest')->nullable();
            $table->string('reasonable_accommodation')->nullable();
            $table->string('transport')->nullable();
            $table->string('local_guardian')->nullable();
            $table->string('organization')->nullable();
            $table->string('position')->nullable();
            $table->string('phone')->nullable();
            $table->string('duration')->nullable();
            $table->string('cause_of_leave')->nullable();
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
        Schema::dropIfExists('table_student_interested_in_jobs');
    }
};
