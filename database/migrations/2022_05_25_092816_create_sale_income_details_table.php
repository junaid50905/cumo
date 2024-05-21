<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\SaleIncome;
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
        Schema::create('sale_income_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SaleIncome::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Product::class)->constrained()->cascadeOnDelete();
            $table->string('available_qty')->nullable();
            $table->string('qty')->nullable();
            $table->double('price', 8, 2)->nullable();
            $table->double('discount', 8, 2)->nullable();
            $table->double('sub_total', 10, 2)->nullable();
            $table->integer('batch')->nullable();
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
        Schema::dropIfExists('sale_income_details');
    }
};
