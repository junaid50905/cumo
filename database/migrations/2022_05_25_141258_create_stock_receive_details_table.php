<?php

use App\Models\Product;
use App\Models\Warehouse;
use App\Models\StockReceive;
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
        Schema::create('stock_receive_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(StockReceive::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Product::class)->constrained()->cascadeOnDelete();
            $table->string('exp_date')->nullable();
            $table->string('available_qty')->nullable();
            $table->string('received')->nullable();
            $table->string('return')->nullable();
            $table->string('receivable')->nullable();
            $table->string('stock_receive_qty')->nullable();
            $table->string('serial')->nullable();
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
        Schema::dropIfExists('stock_receive_details');
    }
};
