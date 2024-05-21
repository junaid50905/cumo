<?php

use App\Models\Payment;
use App\Models\Project;
use App\Models\Purchase;
use App\Models\Supplier;
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
        Schema::create('supplier_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Supplier::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Purchase::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Payment::class)->constrained()->cascadeOnDelete();
            $table->string('date')->nullable();
            $table->string('remark')->nullable();
            $table->string('note')->nullable();
            $table->string('is_approved')->default(0);
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
        Schema::dropIfExists('supplier_payments');
    }
};
