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
        Schema::create('medicine_admin_details', function (Blueprint $table) {
            $table->id();
            $table->string('medicine_admin_id')->nullable();
            $table->string('medicine_name')->nullable();
            $table->string('amount_given')->nullable();
            $table->string('amount_given_unit')->nullable();
            $table->string('expire_check')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('medicine_admin_details');
    }
};
