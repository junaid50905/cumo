<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advice_letters', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('students')->cascadeOnDelete();
            $table->boolean('is_approved')->default(0);
            $table->string('adviceletter_sub')->nullable();
            $table->string('adviceletter_des')->nullable();
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
        Schema::dropIfExists('advice_letters');
    }
};
