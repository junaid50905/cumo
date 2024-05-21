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
        Schema::create('apply_for_jobs', function (Blueprint $table) {
            $table->id();
            
            $table->string('name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email_add')->nullable();
            $table->string('experience')->nullable();
            $table->string('currently_working')->nullable();
            $table->string('academic_qualification')->nullable();
            $table->string('applying_for')->nullable();
            $table->string('cv_upload')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->string('is_company_employee')->nullable();
            $table->string('age')->nullable();
            
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
        Schema::dropIfExists('apply_for_jobs');
    }
};
