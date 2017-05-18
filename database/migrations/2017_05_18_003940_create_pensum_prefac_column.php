<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePensumPrefacColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Faculty',function(Blueprint $table){
           $table->string('prefac_url')->nullable(); 
        });
        Schema::table('Career',function(Blueprint $table){
            $table->string('pensum_url')->nullable();
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
