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
        Schema::create('requisitions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Project::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\User::class, 'requested_by')->constrained('users')->cascadeOnDelete();
            $table->string('date');
            $table->integer('number')->nullable();
            $table->string('title')->nullable();
            $table->foreignIdFor(\App\Models\Warehouse::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->string('note')->nullable();
            $table->string('is_approved')->nullable();
            $table->foreignIdFor(\App\Models\User::class, 'approved_by')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('requisitions');
    }
};
