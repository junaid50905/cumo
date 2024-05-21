<?php

use App\Models\Student;
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
        Schema::create('home_visits', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'visited_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignIdFor(Student::class, 'visited_for')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('home_visits');
    }
};
