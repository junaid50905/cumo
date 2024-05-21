<?php

use App\Models\BankAccount;
use App\Models\ChartofAccounts;
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
        Schema::create('course_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Course::class)->constrained()->cascadeOnDelete();
            $table->string('fee_heading')->nullable();
            $table->foreignIdFor(ChartofAccounts::class, 'account_id')->nullable()->constrained('chartof_accounts')->nullOnDelete();
            $table->double('amount', 8, 2);
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
        Schema::dropIfExists('course_details');
    }
};
