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
        Schema::create('closing_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->string('acc_id')->nullable();
            $table->string('start_date')->nullable();
            $table->string('published')->nullable();
            $table->string('is_approved')->nullable();
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
        Schema::dropIfExists('closing_accounts');
    }
};
