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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('national_id');
            $table->integer('religion_id');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->text('address');
            $table->string('phone_number');
            $table->string('email');
            $table->integer('company_id');
            $table->integer('card_number');
            $table->integer('department_id');
            $table->integer('position_id');
            $table->timestamp('join_date');
            $table->integer('employment_status');
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
        Schema::dropIfExists('employees');
    }
};
