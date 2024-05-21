<?php

use App\Models\BudgetTemplate;
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
        Schema::create('budget_template_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BudgetTemplate::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('budget_head')->nullable();
            $table->string('account_id')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('budget_template_details');
    }
};
