<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_tb', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Heading' , 255);
            $table->string('phone',);
            $table->string('map',2000);
            $table->string('address' , 255);
            $table->string('opentime' , 1000);
            $table->string('email')->unique();
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
        //
    }
}
