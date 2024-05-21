<?php

use App\Models\ProjectSetup;
use App\Models\Student;
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
        Schema::create('project_setups', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->string('name')->nullable();
            $table->string('seq_no')->nullable();
            $table->string('tier_no')->nullable();
            $table->foreignIdFor(ProjectSetup::class, 'parent_id')->nullable()->constrained('project_setups')->cascadeOnDelete();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('project_setups');
    }
};
