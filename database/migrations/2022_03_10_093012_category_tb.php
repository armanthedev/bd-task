<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_tb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('c_name' , 255);
            $table->integer('category');
            $table->string('c_image');
            $table->tinyInteger('status')->comment('1 = Active ,  0= Deactive');
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
