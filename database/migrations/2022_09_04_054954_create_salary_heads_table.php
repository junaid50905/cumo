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
        Schema::create('salary_heads', function (Blueprint $table) {
            $table->id();
            $table->string('head_name')->require();
            $table->string('head_name_bangla')->require();
            $table->string('default_amount')->nullable();
            $table->string('account')->nullable();
            $table->string('head_nature')->nullable();
            $table->string('is_other_payment')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('salary_heads');
    }
};
