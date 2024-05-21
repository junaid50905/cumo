<?php

use App\Models\BudgetHead;
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
        Schema::create('requisition_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Requisition::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Product::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('budget_head_id')->nullable();
            $table->string('budget_sub_head_id')->nullable();
            $table->string('account')->nullable();
            $table->integer('available_qty')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('sub_total')->nullable();
            $table->double('price', 8, 2);
            // $table->double('discount', 8, 2)->nullable();
            $table->boolean('is_approved')->default(0);
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
        Schema::dropIfExists('requisition_details');
    }
};
