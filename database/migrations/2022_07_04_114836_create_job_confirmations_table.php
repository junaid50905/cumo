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
        Schema::create('job_confirmations', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->string('dept_id')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('workStation')->nullable();
            $table->string('start_date')->nullable();
            $table->string('logs')->nullable();
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
        Schema::dropIfExists('job_confirmations');
    }
};
