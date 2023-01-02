<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->longText('content');
            $table->string('status', 50);
            $table->string('feature_image');
            $table->timestamps();
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->bigInteger('post_id');
            $table->bigInteger('tag_id');
        });

        Schema::create('category_post', function (Blueprint $table) {
            $table->bigInteger('category_id');
            $table->bigInteger('post_id');
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
