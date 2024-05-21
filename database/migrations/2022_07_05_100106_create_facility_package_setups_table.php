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
        Schema::create('facility_package_setups', function (Blueprint $table) {
            $table->id();
            $table->string('package_name')->nullable();
            $table->string('salary_head_ID')->nullable();
            $table->string('available_qty')->nullable();
            $table->string('percent_head')->nullable();
            $table->string('price')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('search')->nullable();
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
        Schema::dropIfExists('facility_package_setups');
    }
};
