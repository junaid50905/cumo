<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('care_need_part_one_schoolings', function (Blueprint $table) {
            $table->id();
            $table->string('going_to_school')->nullable();
            $table->string('going_school_if_yes_when')->nullable();
            $table->string('going_school_if_other_name')->nullable();
            $table->string('going_school_if_other_school_name')->nullable();
            $table->string('studied_till_which_class')->nullable();
            $table->string('why_not_attending_school')->nullable();
            $table->string('provide_other_info')->nullable();
            $table->string('any_exam_or_degree_achieved')->nullable();
            $table->string('any_degree_achieved_if_yes_name')->nullable();

            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->unsignedBigInteger('main_teacher_id')->nullable();
            $table->unsignedBigInteger('assistant_teacher_id')->nullable();
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('set null');
            $table->foreign('main_teacher_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('assistant_teacher_id')->references('id')->on('users')->onDelete('set null');

            $table->foreignIdFor(User::class, 'created_by')->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('care_need_part_one_schoolings');
    }
};
