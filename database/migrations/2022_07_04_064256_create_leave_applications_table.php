<?php

use App\Models\LeaveApplication;
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
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->id();
            $table->string('reason')->nullable();

            $table->foreignIdFor(\App\Models\Employee::class)->constrained('employees');
            $table->foreignIdFor(\App\Models\Employee::class,'support_employee_id')->constrained('employees');

            //$table->foreignIdFor(\App\Models\LeaveType::class)->constrained('leave_types');

            $table->integer('leave_type_id')->nullable();
            $table->integer('duration_in_days')->nullable();
            $table->integer('duration_in_hours')->nullable();
            $table->string('address_at_leave')->nullable();
            $table->string('phone_at_leave')->nullable();
            $table->string('available_leave_ttachment')->nullable();
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
        Schema::dropIfExists('leave_applications');
    }
};
