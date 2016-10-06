<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('driver_id');
            $table->string("Driver_name");
            $table->string('driver_email');
            $table->string('driver_contact');
            $table->string('lince_no');
            $table->string('password');
            $table->string('photo');
            $table->string('base_location');
            $table->string('current_location');
            $table->boolean("is_free")->default(true);
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
        Schema::drop('drivers');
    }
}
