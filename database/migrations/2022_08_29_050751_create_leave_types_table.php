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
        Schema::create('leave_types', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('calculation_type')->nullable();
            $table->string('calculation_interval')->nullable();
            $table->string('calculation_base')->nullable();
            $table->string('measurement_unit')->nullable();
            $table->string('leave_ttl')->nullable();
            $table->string('max_carry_cash_day')->nullable();
            $table->string('leave_nature')->nullable();
            $table->string('is_active')->nullable();
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
        Schema::dropIfExists('leave_types');
    }
};
