<?php

use App\Models\Unit;
use App\Models\User;
use App\Models\Category;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Unit::class)->nullable()->constrained()->cascadeOnUpdate();
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('type')->nullable();
            $table->string('description')->nullable();
            $table->integer('reorder_quantity')->nullable();
            $table->string('image')->nullable();
            $table->double('selling_price', 8, 2)->nullable();
            $table->double('cost_price', 8, 2)->nullable();
            $table->string('making_cost')->nullable();
            $table->string('expiry_alert')->nullable();
            $table->double('current_price')->nullable();
            $table->string('is_active')->nullable();
            $table->string('sale_price_in_percent')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
