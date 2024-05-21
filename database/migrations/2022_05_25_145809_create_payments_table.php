<?php

use App\Models\User;
use App\Models\Cheque;
use App\Models\Project;
use App\Models\Purchase;
use App\Models\BankAccount;
use App\Models\PaymentType;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('method')->nullable();
            $table->string('payment_type')->nullable();
            $table->foreignIdFor(Project::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Purchase::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Cheque::class)->nullable()->constrained()->cascadeOnDelete();
            $table->double('amount', 8, 2)->nullable();
            $table->string('note')->nullable();
            $table->string('is_approved')->default(0);
            $table->foreignIdFor(BankAccount::class, 'from_account')->nullable()->constrained('bank_accounts')->nullOnDelete();
            $table->foreignIdFor(BankAccount::class, 'to_account')->nullable()->constrained('bank_accounts')->nullOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->double('due', 8, 2)->nullable();
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
        Schema::dropIfExists('payments');
    }
};
