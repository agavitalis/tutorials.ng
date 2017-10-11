<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         
         Schema::create('courses', function (Blueprint $table) {
             $table->increments('id')->unique();
             $table->string('coursename');  
             $table->string('coursedetails')->nullable();
             $table->string('picture');  
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
         Schema::dropIfExists('courses');
     }
}
