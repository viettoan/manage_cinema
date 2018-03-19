<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            //
        $table->increments('id');
        $table->string('title', 191);
        $table->string('description', 191);
        $table->text('contents');
        $table->integer('status')->default(0); //Giá trị mặc định
        $table->integer('media_id')->unsigned(); //Giá trị không âm
        $table->integer('user_id')->unsigned();
        $table->integer('type');
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
        Schema::dropIfExists('posts');
    }
}
