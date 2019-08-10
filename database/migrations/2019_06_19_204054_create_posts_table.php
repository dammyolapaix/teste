<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('title', 255)->unique();
            $table->string('slug', 255);
            $table->text('body');
            $table->string('image', 255)->nullable();
            
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
