<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeliveryinfoTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveryinfo_tb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('u_name' , 255);
            $table->integer('Amount');
            $table->string('pay_method');
            $table->double('Fees', 8, 2);
            $table->string('Comments',255);
            $table->date('Date');
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
