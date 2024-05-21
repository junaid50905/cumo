<?php

use App\Models\User;
use App\Models\Course;
use App\Models\BankAccount;
use App\Models\ChartofAccounts;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Course::class, 'parent_course_id')->nullable()->constrained('courses')->nullOnDelete();
            // $table->double('amount', 8, 2);
            $table->string('duration')->nullable();
            // $table->string('cash_account_id')->nullable();
            $table->foreignIdFor(ChartofAccounts::class, 'cash_account_id')->nullable()->nullOnDelete();
            $table->string('description')->nullable();
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
