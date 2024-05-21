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
        Schema::create('attendance_policies', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->string('policy_name')->nullable();
            $table->string('over_time_start_grace')->nullable();
            $table->string('arrival_grace')->nullable();
            $table->string('lunch_break')->nullable();
            $table->string('lunch_time')->nullable();
            $table->string('working_hour')->nullable();
            $table->string('sun_in')->nullable();
            $table->string('sun_out')->nullable();
            $table->string('sun_is_next_day')->nullable();
            $table->string('mon_in')->nullable();
            $table->string('mon_out')->nullable();
            $table->string('mon_is_next_day')->nullable();
            $table->string('thu_in')->nullable();
            $table->string('thu_out')->nullable();
            $table->string('thu_is_next_day')->nullable();
            $table->string('wed_in')->nullable();
            $table->string('wed_out')->nullable();
            $table->string('wed_is_next_day')->nullable();
            $table->string('th_in')->nullable();
            $table->string('th_out')->nullable();
            $table->string('th_is_next_day')->nullable();
            $table->string('fri_in')->nullable();
            $table->string('fri_out')->nullable();
            $table->string('fri_is_next_day')->nullable();
            $table->string('sat_in')->nullable();
            $table->string('sat_out')->nullable();
            $table->string('sat_is_next_day')->nullable();
            $table->string('deduct_Leave_for')->nullable();
            $table->string('deduct_in_minute')->nullable();
            $table->string('policy_desc')->nullable();
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
        Schema::dropIfExists('attendance_policies');
    }
};
