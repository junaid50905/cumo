<?php

use App\Models\User;
use App\Models\Project;
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
        Schema::create('stock_transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class)->nullable()->constrained()->nullOnDelete();
            $table->string('issue_type')->nullable();
            $table->string('reference')->nullable();
            $table->string('date')->nullable();
            $table->string('total_transfer_quantity')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->foreignIdFor(Warehouse::class, 'warehouse_id_from')->nullable()->constrained('warehouses')->nullOnDelete();
            $table->foreignIdFor(Warehouse::class, 'warehouse_id_to')->nullable()->constrained('warehouses')->nullOnDelete();
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('stock_transfers');
    }
};
