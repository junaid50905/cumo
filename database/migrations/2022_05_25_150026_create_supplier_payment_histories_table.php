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
        Schema::create('supplier_payment_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\SupplierPayment::class)->constrained()->cascadeOnDelete();
            $table->string('type');
            $table->double('amount', 10, 2);
            $table->foreignIdFor(\App\Models\Cheque::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('supplier_payment_histories');
    }
};
