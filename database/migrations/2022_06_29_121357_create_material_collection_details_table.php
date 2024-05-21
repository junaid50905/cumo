<?php

use App\Models\MaterialCollection;
use App\Models\Product;
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
        /*Schema::create('material_collection_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MaterialCollection::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Product::class, 'product_id')->constrained('products')->cascadeOnDelete();
            $table->string('qty')->nullable();
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_collection_details');
    }
};
