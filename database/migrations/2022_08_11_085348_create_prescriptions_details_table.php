<?php

use App\Models\Prescription;
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
        Schema::create('prescriptions_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Prescription::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('medicine_admin')->nullable();
            $table->string('medicine_dose')->nullable();
            $table->string('medicine_route')->nullable();
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
        Schema::dropIfExists('prescriptions_details');
    }
};
