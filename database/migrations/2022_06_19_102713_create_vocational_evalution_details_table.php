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
        Schema::create('vocational_evalution_details', function (Blueprint $table) {
            $table->id();
            $table->string('vocational_evalution_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('production')->nullable();
            $table->string('target')->nullable();
            $table->string('wastage')->nullable();
            $table->string('time_taken')->nullable();
            $table->string('work_quality')->nullable();
            $table->string('delivery_complete')->nullable();
            $table->string('follow_ins')->nullable();
            $table->string('generalizatio')->nullable();
            $table->string('adaption')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('vocational_evalution_details');
    }
};
