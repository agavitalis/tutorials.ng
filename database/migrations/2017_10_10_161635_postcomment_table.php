<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostcommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         
         Schema::create('postcomments', function (Blueprint $table) {
             $table->increments('id')->unique();
             $table->string('comment');
             $table->string('commented_by')->nullable();          
             $table->string('post_id')->nullable();
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
         Schema::dropIfExists('postcomments');
     }
}
