<?php

use App\Models\SendMail;
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
        Schema::create('send_mail_details', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(SendMail::class)->constrained()->cascadeOnDelete();
            $table->integer('send_mail_id')->unsigned();
            $table->string('to')->nullable();
            $table->string('subject')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('logs')->nullable();
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
        Schema::dropIfExists('send_mail_details');
    }
};
