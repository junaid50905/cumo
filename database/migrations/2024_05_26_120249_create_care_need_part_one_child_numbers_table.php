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
        Schema::create('care_need_part_one_child_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('support_towards_sibling_one')->nullable();
            $table->string('stsone_if_yes_name_and_profession')->nullable();
            $table->string('stsone_if_yes_age')->nullable();
            $table->string('support_towards_sibling_two')->nullable();
            $table->string('ststwo_if_yes_name_and_profession')->nullable();
            $table->string('ststwo_if_yes_age')->nullable();
            $table->string('support_towards_sibling_three')->nullable();
            $table->string('ststhree_if_yes_name_and_profession')->nullable();
            $table->string('ststhree_if_yes_age')->nullable();
            $table->string('marriage_within_family_or_relative')->nullable();
            $table->string('mw_family_or_relative_if_yes_share_relation')->nullable();
            $table->string('other_relative_have_disabilities')->nullable();
            $table->string('other_disabilities_if_yes_disability_type')->nullable();
            $table->string('family_economical_condition')->nullable();
            $table->string('net_earning_of_year')->nullable();
            $table->string('other_relevant_family_info')->nullable();
            $table->string('child_numbers_report')->nullable();
            
            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->unsignedBigInteger('main_teacher_id')->nullable();
            $table->unsignedBigInteger('assistant_teacher_id')->nullable();
            
            // Ensure unique foreign key constraint names
            $table->foreign('appointment_id', 'fk_cnpn_appointment')->references('id')->on('appointments')->onDelete('set null');
            $table->foreign('main_teacher_id', 'fk_cnpn_main_teacher')->references('id')->on('users')->onDelete('set null');
            $table->foreign('assistant_teacher_id', 'fk_cnpn_assistant_teacher')->references('id')->on('users')->onDelete('set null');

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
        Schema::dropIfExists('care_need_part_one_child_numbers');
    }
};
