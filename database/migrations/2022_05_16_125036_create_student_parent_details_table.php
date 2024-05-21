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
        Schema::create('student_parent_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id')->constrained()->cascadeOnDelete();
            $table->string('father_name')->nullable();
            $table->string('father_number')->nullable();
            $table->string('father_profession')->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_fb_link')->nullable();
            $table->string('father_doc')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_number')->nullable();
            $table->string('mother_profession')->nullable();
            $table->string('mother_email')->nullable();
            $table->string('mother_fb_link')->nullable();
            $table->string('mother_doc')->nullable();
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
        Schema::dropIfExists('student_parent_details');
    }
};
