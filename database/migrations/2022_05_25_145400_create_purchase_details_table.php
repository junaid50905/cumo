<?php


use App\Models\Cheque;
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
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Purchase::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Supplier::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Product::class)->constrained()->cascadeOnDelete();
            $table->integer('available_qty')->nullable();
            $table->integer('qty')->nullable();
            $table->string('receivable')->nullable();
            $table->string('total_receive_qty')->nullable();
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
        Schema::dropIfExists('purchase_details');
    }
};
