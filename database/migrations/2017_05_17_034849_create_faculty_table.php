<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('dean');
            $table->string('dean2');
            $table->string('location_lat');
            $table->string('location_long');
            $table->string('address');
            $table->string('phone');
            $table->string('social_facebook');
            $table->string('social_twitter');
            $table->string('web_address');
            

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
