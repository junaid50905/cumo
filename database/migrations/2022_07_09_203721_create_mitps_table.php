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
        Schema::create('mitps', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Student::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Activity::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Task::class)->constrained()->cascadeOnDelete();
            
            // $table->foreignIdFor(\App\Models\SensoryChecklistChild::class)->nullable()->constrained()->cascadeOnDelete();
            // $table->foreignIdFor(\App\Models\Social::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\OccupationalTherapy::class)->nullable()->constrained()->cascadeOnDelete();
           
            $table->foreignIdFor(\App\Models\Physiotherapy::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\FunctionalCommunication::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\FunctionalMovementskill::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\ExecutiveFunction::class)->nullable()->constrained()->cascadeOnDelete();
           
            $table->foreignIdFor(\App\Models\AutisumBhehaviour::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\SensoryAdult::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\IndividualRisk::class)->nullable()->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('mitps');
    }
};
