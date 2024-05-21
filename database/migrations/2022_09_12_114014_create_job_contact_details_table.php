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
        Schema::create('job_contact_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\JobContact::class)->constrained()->cascadeOnDelete();
            $table->string('basic_salary');
            $table->string('house_allowence');
            $table->string('medical_allowance');
            $table->string('total');
            // $table->string('to')->nullable();
            // $table->string('subject')->nullable();
            // $table->string('date')->nullable();
            // $table->string('time')->nullable();
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
        Schema::dropIfExists('job_contact_details');
    }
};
