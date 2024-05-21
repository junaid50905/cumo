<?php

use App\Models\User;
use App\Models\Product;
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
        Schema::create('material_collections', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'collected_for')->nullable()->constrained('users')->nullOnDelete();
            $table->string('date')->nullable();
            $table->foreignIdFor(Project::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Warehouse::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Product::class, 'produce_product_id')->constrained('products')->cascadeOnDelete();
            $table->string('will_produce')->nullable();
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('material_collections');
    }
};
