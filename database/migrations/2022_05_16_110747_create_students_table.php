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
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('type', ['online', 'offline'])->default('offline');
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('dob')->nullable();
            $table->string('date_of_assessment')->nullable();
            $table->string('nid')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('diagnosis')->nullable();
            $table->string('suborno_card_no')->nullable();
            $table->string('photo')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('statuss')->nullable();
            $table->string('stage')->nullable();
            $table->boolean('approved_for_observation')->default(0);
            $table->string('is_interested_in_job')->default(0);
            $table->string('disability')->nullable();
            $table->string('work_interest')->nullable();
            $table->string('transport')->nullable();
            $table->string('device_name')->nullable();
            $table->string('prefer_work_area')->nullable();
            $table->string('local_guardian')->nullable();
            $table->string('position')->nullable();
            $table->string('duration')->nullable();
            $table->string('skill_of_work')->nullable();
            $table->string('reasonable_accommodation')->nullable();
            $table->string('device_use')->nullable();
            $table->string('qualification')->nullable();
            $table->string('training')->nullable();
            $table->string('organization')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('cause_of_leave')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
