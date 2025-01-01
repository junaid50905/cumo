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
        Schema::create('care_need_partone_suggestions', function (Blueprint $table) {
            $table->id();
            $table->string('observation', 50)->nullable();
            $table->string('follow_up', 50)->nullable();
            $table->string('assessment', 50)->nullable();
            $table->string('reference', 50)->nullable();
            $table->string('reference_name', 100)->nullable();
            $table->string('therapies')->nullable();
            $table->string('cocurricular_activities')->nullable();
            
            $table->unsignedBigInteger('appointment_id')->nullable();

            // Define foreign keys with more unique names
            $table->foreign('appointment_id', 'fk_suggestion_appointment')->references('id')->on('appointments')->onDelete('set null');

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
        Schema::dropIfExists('care_need_part_one_suggestions');
    }
};
