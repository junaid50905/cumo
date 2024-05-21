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
        Schema::create('chartof_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('reporting_connection')->nullable();
            $table->string('account_category')->nullable();
            $table->string('budget_link')->nullable();
            $table->string('account_code')->nullable();
            $table->string('account_group')->nullable();
            $table->string('parent_account')->nullable();
            $table->string('account_name')->nullable();
            $table->string('opening_balance')->nullable();
            $table->string('current_balance')->nullable();
            $table->string('sequence_no')->nullable();
            $table->string('account_type')->nullable();
            $table->string('btnradio')->nullable();
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
        Schema::dropIfExists('chartof_accounts');
    }
};
