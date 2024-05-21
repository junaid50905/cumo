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
        Schema::create('executive_functions', function(Blueprint $table)
        {
            $table->id();
            $table->string('date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'candidate_id')->nullable()->constrained('students')->cascadeOnDelete();
            $table->string('have_trouble_getting')->nullable();
            $table->string('start_tasks_with_enthusiasm')->nullable();
            $table->string('find_it_hard')->nullable();
            $table->string('i_see_or_hear')->nullable();
            $table->string('become_absorbed_in_things')->nullable();
            $table->string('have_trouble_following_conversations')->nullable();
            $table->string('forget_things')->nullable();
            $table->string('At_least_once_a_day')->nullable();
            $table->string('consistently_forget_appointments')->nullable();
            $table->string('Cant_seem_to_get')->nullable();
            $table->string('have_difficulty_figuring')->nullable();
            $table->string('waste_time_trying')->nullable();
            $table->string('become_frustrated_when_things')->nullable();
            $table->string('have_trouble_completing')->nullable();
            $table->string('I_will_do_it_later')->nullable();
            $table->string('next')->nullable();
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
        Schema::dropIfExists('executive_functions');
    }
};
