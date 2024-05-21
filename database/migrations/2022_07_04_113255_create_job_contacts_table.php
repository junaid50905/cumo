<?php


use App\Models\User;
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
        Schema::create('job_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->string('department')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('workStation')->nullable();
            $table->string('start_date')->nullable();
            $table->string('log')->nullable();
            $table->string('basic_salary')->nullable();
            $table->string('house_allowence')->nullable();
            $table->string('madical_allowance')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->string('total')->nullable();
            //$table->string(User::class, 'created_by')->constrained('users')->cascadeOnDelete();
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('job_contacts');
    }
};
