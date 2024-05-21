<?php

use App\Models\Cheque;
use App\Models\Payment;
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
        Schema::create('payment_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Payment::class)->constrained('payments')->cascadeOnDelete();
            $table->string('type');
            $table->double('amount', 8, 2);
            $table->json('info')->nullable();
            $table->double('payable_amount', 8, 2)->nullable();
            $table->double('due_amount', 8, 2)->nullable();
            $table->text('note')->nullable();
            $table->foreignIdFor(Cheque::class)->nullable()->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('payment_histories');
    }
};
