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
        Schema::create('assessment_tool_ques_ans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->unsignedBigInteger('question_id')->nullable();
            $table->tinyInteger('answer')->nullable();
            $table->string('assessment_date')->nullable();
            $table->unsignedBigInteger('main_teacher_id')->nullable();
            $table->unsignedBigInteger('assistant_teacher_id')->nullable();

            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('assessment_categories')->onDelete('set null');
            $table->foreign('sub_category_id')->references('id')->on('assessment_sub_categories')->onDelete('set null');
            $table->foreign('question_id')->references('id')->on('assessment_questions')->onDelete('set null');
            $table->foreign('main_teacher_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('assistant_teacher_id')->references('id')->on('users')->onDelete('set null');
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();

            $table->tinyInteger('status')->default(1)->comment('1=Active,0=Inactive');
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
        Schema::dropIfExists('assessment_tool_ques_ans');
    }
};
