<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Product::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Category::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('measure')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('cost')->nullable();
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
        Schema::dropIfExists('produdct_details');
    }
};
