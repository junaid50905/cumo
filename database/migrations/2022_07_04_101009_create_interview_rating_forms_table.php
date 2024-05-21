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
        Schema::create('interview_rating_forms', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->string('dept_id')->nullable();
            $table->string('requisition_for')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('criteria')->nullable();
            $table->string('rating')->nullable();
            $table->string('comment')->nullable();
            $table->string('recommendation')->nullable();
            $table->string('overall_comment')->nullable();
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
        Schema::dropIfExists('interview_rating_forms');
    }
};
