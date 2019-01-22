<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hall4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       

        Schema::create('Resource',function (Blueprint $table)
        {
            $table->increments('resid');
            $table->text('resname');
            $table->string('email', 100);
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('showname',150)->nullable();
            $table->string('use',150)->nullable();
           $table->string('semtype',150)->nullable();
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
      
        Schema::drop('Resource');
        
    }
}
