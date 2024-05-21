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
        Schema::create('drama_diary_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->foreignIdFor(\App\Models\User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Student::class, 'candidate_id')->nullable()->constrained('students')->cascadeOnDelete();
            $table->json('basic_functional_area')->nullable();
            $table->json('other_areas')->nullable();
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
        Schema::dropIfExists('drama_diary_evaluations');
    }
};
