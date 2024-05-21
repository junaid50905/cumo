<?php

use App\Models\DepartmentSetup;
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
        Schema::create('employee_requisitions', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->string('requisition_for')->nullable();
            $table->string('job_title')->nullable();
            $table->foreignIdFor(DepartmentSetup::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('project_id')->nullable();
            $table->string('job_type')->nullable();
            $table->string('vacancy_for')->nullable();
            $table->string('when_required')->nullable();
            $table->string('requested_by')->nullable();
            $table->string('responsibilities')->nullable();
            $table->string('requirements')->nullable();
            $table->string('last_date')->nullable();
            $table->string('new_position')->nullable();
            $table->string('replacement')->nullable();

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
        Schema::dropIfExists('employee_requisitions');
    }
};
