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
        Schema::create('reporting_memos', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->string('department')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('joining_date')->nullable();
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
        Schema::dropIfExists('reporting_memos');
    }
};
