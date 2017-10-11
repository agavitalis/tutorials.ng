<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LearnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('learners', function (Blueprint $table) {
             $table->increments('id');
             $table->string('email')->unique();
             $table->string('phone')->nullable();;
             $table->string('skills')->nullable();
             $table->string('education')->nullable();
             $table->string('about')->nullable();
             $table->string('sex')->nullable();
             $table->string('passport')->nullable();
             $table->string('address')->nullable();
             $table->string('state')->nullable();
             $table->string('country')->nullable();
             $table->rememberToken();
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
         Schema::dropIfExists('learners');
     }
}
