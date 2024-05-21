<?php

use App\Models\YearEndClose;
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
        Schema::create('year_end_colse_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(YearEndClose::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('category_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('unit')->nullable();
            $table->string('counted_stock')->nullable();
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
        Schema::dropIfExists('year_end_colse_details');
    }
};
