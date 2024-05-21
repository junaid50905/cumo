<?php

use App\Models\User;
use App\Models\Project;
use App\Models\Purchase;
use App\Models\Warehouse;
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
        Schema::create('stock_receives', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Warehouse::class)->nullable()->constrained()->nullOnDelete();
            $table->string('purchase_id')->nullable();
            $table->string('type')->nullable();
            $table->string('date')->nullable();
            $table->string('note')->nullable();
            $table->string('is_approved')->default(0);
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('stock_receives');
    }
};
