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
        Schema::create('care_need_part_one_home_infos', function (Blueprint $table) {
            $table->id();
            $table->string('separate_room')->nullable();
            $table->string('separate_bed')->nullable();
            $table->string('sleep_alone')->nullable();
            $table->string('separate_cupboard')->nullable();
            $table->string('separate_toilet')->nullable();
            $table->string('own_equipment')->nullable();
            $table->string('own_equipment_other')->nullable();
            $table->string('anything_else')->nullable();
            $table->string('please_specify')->nullable();
            $table->string('home_infos_report')->nullable();

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
        Schema::dropIfExists('care_need_part_one_home_infos');
    }
};
