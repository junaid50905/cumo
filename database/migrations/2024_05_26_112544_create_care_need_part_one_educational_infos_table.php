<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('care_need_part_one_educational_infos', function (Blueprint $table) {
            $table->id();
            $table->string('going_to_school')->nullable();
            $table->string('going_school_if_yes_when')->nullable();
            $table->string('going_school_if_other_name')->nullable();
            $table->string('going_school_name_of_school')->nullable();
            $table->string('speaking_capacity')->nullable();
            $table->string('listening_capacity')->nullable();
            $table->string('reading_capacity')->nullable();
            $table->string('writing_capacity')->nullable();
            $table->string('counting_capacity')->nullable();
            $table->string('money_concept')->nullable();
            $table->string('educational_infos_report')->nullable();

            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->unsignedBigInteger('main_teacher_id')->nullable();
            $table->unsignedBigInteger('assistant_teacher_id')->nullable();
            $table->foreign('appointment_id', 'fk_appointment')->references('id')->on('appointments')->onDelete('set null');
            $table->foreign('main_teacher_id', 'fk_main_teacher')->references('id')->on('users')->onDelete('set null');
            $table->foreign('assistant_teacher_id', 'fk_assistant_teacher')->references('id')->on('users')->onDelete('set null');
            
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
        Schema::dropIfExists('care_need_part_one_educational_infos');
    }
};
