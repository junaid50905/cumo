<?php

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
        Schema::create('year_end_closes', function (Blueprint $table) {
            $table->id();
            $table->string('warehouse_id')->nullable();
            $table->string('date')->nullable();
            $table->string('note')->nullable();
            $table->string('is_approved')->nullable();
            $table->foreignIdFor(\App\Models\User::class, 'created_by')->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('year_end_closes');
    }
};
