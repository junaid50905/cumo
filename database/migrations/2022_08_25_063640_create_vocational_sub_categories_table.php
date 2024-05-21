<?php

use Illuminate\Support\Facades\Schema;
use App\Models\VocationalMarkingCategory;
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
        Schema::create('vocational_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(VocationalMarkingCategory::class)->nullable()->constrained('vocational_marking_categories')->nullOnDelete();
            $table->string('category_id')->nullable();
            $table->string('sub_categories')->nullable();
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
        Schema::dropIfExists('vocational_sub_categories');
    }
};
