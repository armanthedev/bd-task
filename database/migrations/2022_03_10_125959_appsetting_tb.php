<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AppsettingTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appsetting_tb', function (Blueprint $table) {
            $table->smallIncrements('Id');
            $table->string('title' , 255);
            $table->string('offer' , 255);
            $table->text('address',);
            $table->string('email' , 255);
            $table->string('phone');
            $table->string('fav_img');
            $table->string('site_logo');
            $table->string('admin_align');
            $table->string('office_time');
            $table->string('copyright_text');
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
