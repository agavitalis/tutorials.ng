<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecommendedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         
         Schema::create('recommended_tables', function (Blueprint $table) {
             $table->increments('id')->unique();
             $table->string('uploadedby');
             $table->string('videolink')->nullable();          
             $table->string('materialslink')->nullable();
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
         Schema::dropIfExists('recommended_tables');
     }
}
