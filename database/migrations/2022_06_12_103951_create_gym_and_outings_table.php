<?php

use App\Models\User;
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
        Schema::create('gym_and_outings', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('treadmill')->nullable();
            $table->string('cycling_5_min')->nullable();
            $table->string('butterfly')->nullable();
            $table->string('lat_pull_down')->nullable();
            $table->string('lat_up')->nullable();
            $table->string('dumble')->nullable();
            $table->string('Leg_curl')->nullable();
            $table->string('vibration')->nullable();
            $table->string('spot_jump')->nullable();
            $table->string('Free_hand_exercise')->nullable();
            $table->string('ball_throw')->nullable();
            $table->string('basket_ball_throw')->nullable();
            $table->string('ball_kick')->nullable();
            $table->string('walking')->nullable();
            $table->string('running')->nullable();
            $table->string('height_down_jump')->nullable();
            $table->string('tennis_ball_throw')->nullable();
            $table->string('tennis_ball_catch')->nullable();
            $table->string('ball_fielding_practice')->nullable();
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
        Schema::dropIfExists('gym_and_outings');
    }
};
