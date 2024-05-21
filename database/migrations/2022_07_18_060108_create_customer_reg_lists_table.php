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
        Schema::create('customer_reg_lists', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address_1')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('email')->nullable();
            $table->string('select')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('advance')->nullable();
            $table->string('is_card_allow')->nullable();
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
        Schema::dropIfExists('customer_reg_lists');
    }
};
