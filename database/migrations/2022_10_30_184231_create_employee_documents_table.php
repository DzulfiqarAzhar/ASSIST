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
        Schema::create('employee_documents', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('tax_num');
            $table->string('social_health_ins_num');
            $table->string('social_employment_ins_num');
            $table->integer('bank_id');
            $table->string('bank_acct_num');
            $table->string('bank_acct_name');
            $table->string('national_id_img');
            $table->string('tax_id_img');
            $table->string('graduation_cert_img');
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
        Schema::dropIfExists('employee_documents');
    }
};
