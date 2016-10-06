<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateOtpModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otp_models', function (Blueprint $table) {
           
            $table->integer('id');
            $table->string('mobile_no');
            $table->primary('mobile_no');
            $table->string('otp_value');
            $table->string('subject');
            $table->boolean('verified')->default(false);
            $table->timestamps();
        });

    DB::update("ALTER TABLE otp_models MODIFY COLUMN ID INTEGER NOT NULL UNIQUE AUTO_INCREMENT;");    

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('otp_models');
    }
}
