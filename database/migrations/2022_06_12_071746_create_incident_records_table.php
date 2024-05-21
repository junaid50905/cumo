<?php

use App\Models\User;
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
        Schema::create('incident_records', function(Blueprint $table)
        {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('candidate_id')->nullable();
            $table->string('incident_type')->nullable();
            $table->string('setting')->nullable();
            $table->string('date_and_time')->nullable();
            $table->string('duration')->nullable();
            $table->string('action_taken')->nullable();
            $table->json('previous_causes')->nullable();
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
        Schema::dropIfExists('incident_records');
    }
};
