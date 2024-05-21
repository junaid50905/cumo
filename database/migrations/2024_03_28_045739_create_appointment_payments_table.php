<?php

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('set null');
            $table->unsignedTinyInteger('income_type')->comment('1:Interview,2:Assessment,3:Observation');
            $table->string('payment_method');
            $table->string('amount');
            $table->string('transaction_id')->unique();
            $table->unsignedTinyInteger('payment_status')->default(1)->comment('1:Pending,2:Processing,3:Cancel,4:Failed,5:Completed');
            $table->foreignIdFor(User::class, 'created_by')->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('appointment_payments');
    }
}