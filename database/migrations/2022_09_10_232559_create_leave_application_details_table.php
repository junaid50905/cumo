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
        Schema::create('leave_application_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\LeaveApplication::class)->constrained()->cascadeOnDelete();
            $table->integer('type')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('duration')->nullable();
            $table->string('is_houe')->nullable();
            $table->string('avl_time')->nullable();
            $table->string('half_day')->nullable();
            $table->string('hour')->nullable();
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
        Schema::dropIfExists('leave_application_details');
    }
};
