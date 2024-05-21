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
        Schema::create('attendenc_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Attendence::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Employee::class)->nullable()->constrained()->nullOnDelete();
            // $table->string('employee')->nullable();
            $table->string('sing_in')->nullable();
            $table->string('sing_out')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('attendenc_details');
    }
};
