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
        Schema::create('bonus_packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name')->nullable();
            $table->string('description')->nullable();
            $table->string('amount')->nullable();
            $table->string('is_in_percent')->nullable();
            $table->string('sal_head')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('curnc_id')->nullable();
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
        Schema::dropIfExists('bonus_packages');
    }
};
