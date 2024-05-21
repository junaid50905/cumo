<?php

use App\Models\AssignInterviewer;
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
        Schema::create('assign_interviewer_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AssignInterviewer::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('interviewer')->nullable();
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
        Schema::dropIfExists('assign_interviewer_details');
    }
};
