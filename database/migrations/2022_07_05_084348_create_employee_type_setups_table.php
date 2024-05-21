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
        Schema::create('employee_type_setups', function (Blueprint $table) {
            $table->id();
            $table->string('employeetype_name')->nullable();
            $table->string('type_desc')->nullable();
            $table->string('btnradio1')->nullable();
            $table->string('btnradio2')->nullable();
            $table->string('btnradio3')->nullable();
            $table->string('btnradio4')->nullable();
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
        Schema::dropIfExists('employee_type_setups');
    }
};
