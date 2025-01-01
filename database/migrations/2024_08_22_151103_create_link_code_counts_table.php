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
        Schema::create('link_code_counts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('link_code_for')->default(1)->comment('1=specialities,2=assessment_infos,3=home_infos,4=educational_infos,5=child_conditions,6=child_numbers,7=schoolings');
            $table->string('link_code')->nullable();
            $table->unsignedInteger('count')->default(0);  
            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('set null');
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
        Schema::dropIfExists('link_code_counts');
    }
};