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
        Schema::create('table_of_contents', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('table_of_contents')->onDelete('cascade');
            $table->string("link_code")->unique();
            $table->tinyInteger('task_type')->nullable()->comment('1=Vocational,2=Pre-Vocational');

            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
            $table->tinyInteger('status')->default(1)->comment('1=Active,0=Inactive');
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
        Schema::dropIfExists('table_of_contents');
    }
};
