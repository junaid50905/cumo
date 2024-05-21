<?php

use App\Models\Product;
use App\Models\PurchaseReturn;
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
        Schema::create('purchase_return_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PurchaseReturn::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Supplier::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Product::class)->constrained()->cascadeOnDelete();
            $table->integer('available_qty')->nullable();
            $table->integer('qty')->nullable();
            $table->double('price', 8, 2)->nullable();
            $table->double('vat', 4, 2)->nullable();
            $table->double('discount', 4, 2)->nullable();
            $table->double('sub_total', 10, 2)->nullable();
            $table->boolean('is_paid')->nullable();
            $table->string('exp_date')->nullable();
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
        Schema::dropIfExists('purchase_return_details');
    }
};
