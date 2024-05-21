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
        Schema::create('staff_and_workplace_inspections', function(Blueprint $table)
        {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(\App\Models\User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('visited_place')->nullable();
            $table->string('name_surname')->nullable();
            $table->string('date_of_joining_the_employee_workplace')->nullable();
            $table->string('monthly_salary')->nullable();
            $table->string('information_about')->nullable();
            $table->string('how_many_hours_a_day')->nullable();
            $table->string('what_is_the_title_of')->nullable();
            $table->string('this_work_hour_is_correct')->nullable();
            $table->string('does_the_target_employee')->nullable();
            $table->string('is_the_target_worker_wearing')->nullable();
            $table->string('is_the_target_staff_clean_enough')->nullable();
            $table->string('is_the_target_worker_getting_appropriate')->nullable();
            $table->string('is_there_regular_communication_between')->nullable();
            $table->string('how_to_communicate_with_colleagues')->nullable();
            $table->string('what_is_the_overall')->nullable();
            $table->string('details')->nullable();
            $table->string('recommend_comments')->nullable();
            $table->string('suggesstion')->nullable();
            $table->string('signature_and_date_of_visitor')->nullable();
            $table->string('designation')->nullable();
            $table->string('date_two')->nullable();
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
        Schema::dropIfExists('staff_and_workplace_inspections');
    }
};
