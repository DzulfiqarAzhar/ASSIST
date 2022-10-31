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
        Schema::create('employee_work_experiences', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('company_name');
            $table->string('last_position');
            $table->timestamp('join_date');
            $table->timestamp('resign_date');
            $table->bigInteger('last_salary');
            $table->integer('currency_id');
            $table->string('reference_name');
            $table->string('reference_contact');
            $table->integer('employment_status');
            $table->string('resignation_reason');
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
        Schema::dropIfExists('employee_work_experiences');
    }
};
