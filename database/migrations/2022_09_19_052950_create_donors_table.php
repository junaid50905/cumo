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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('address_1')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('is_card_allow')->nullable();
            $table->string('advance')->nullable();
            $table->string('is_active')->nullable();
            $table->string('medical_allowance')->nullable();

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
        Schema::dropIfExists('donors');
    }
};
