<?php

use App\Models\User;
use App\Models\Project;
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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class)->constrained()->cascadeOnDelete();
            $table->boolean('is_approved')->default(0);
            $table->float('transaction_amount', 8, 2);
            $table->string('voucher_date')->nullable();
            $table->string('particulars')->nullable();
            $table->string('reference')->nullable();
            $table->string('account_no')->nullable();
            $table->foreignIdFor(\App\Models\User::class, 'approved_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignIdFor(\App\Models\User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignIdFor(\App\Models\User::class, 'updated_by')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('journals');
    }
};
