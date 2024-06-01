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
        Schema::create('care_need_part_one_general_infos', function (Blueprint $table) {
            $table->id();
            $table->string('learned_about_us')->nullable();
            $table->string('specify_name')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('govt_disability_registration')->nullable();
            $table->string('govt_dis_if_not_why')->nullable();
            $table->string('govt_dis_if_yes_reg_number')->nullable();
            $table->string('obtaining_registration')->nullable();
            $table->string('referred_parents_forum')->nullable();
            $table->string('referred_if_yes_number')->nullable();
            $table->string('referred_if_yes_person')->nullable();

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
        Schema::dropIfExists('care_need_part_one_general_infos');
    }
};
