<?php

use App\Models\User;
use App\Models\Appointment;
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
        Schema::create('event_calendars', function (Blueprint $table) {
            $table->id();
            $table->string('event_title');
            $table->unsignedTinyInteger('event_medium_type')->default(2)->comment('1:Online,2:Offline');
            $table->string('event_date');
            $table->string('event_start_time');
            $table->string('event_end_time');
            $table->unsignedTinyInteger('event_type')->comment('1:Interview,2:Assessment,3:Observation');
            $table->unsignedTinyInteger('event_status')->default(1)->comment('1:Pending,2:Processing,3:Cancel,4:Completed');
            $table->string('category_id')->nullable();
            $table->string('sub_category_id')->nullable();

            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->unsignedBigInteger('main_teacher_id')->nullable();
            $table->unsignedBigInteger('assistant_teacher_id')->nullable();
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('set null');
            $table->foreign('main_teacher_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('assistant_teacher_id')->references('id')->on('users')->onDelete('set null');

            $table->foreignIdFor(User::class, 'created_by')->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('appointment_calendars');
    }
};
