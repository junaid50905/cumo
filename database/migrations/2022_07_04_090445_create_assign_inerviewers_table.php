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
        Schema::create('assign_inerviewers', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->string('dept_id')->nullable();
            $table->string('name')->nullable();
            $table->string('applying_date')->nullable();
            $table->string('applying_time')->nullable();
            $table->string('interviewer_name')->nullable();
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
        Schema::dropIfExists('assign_inerviewers');
    }
};
