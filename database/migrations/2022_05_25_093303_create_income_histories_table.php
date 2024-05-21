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
        Schema::create('income_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Income::class)->constrained('incomes')->cascadeOnDelete();
            $table->string('type');
            $table->double('amount', 8, 2);
            $table->json('info')->nullable();
            $table->double('payable_amount', 8, 2)->nullable();
            $table->double('due_amount', 8, 2)->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('income_histories');
    }
};
