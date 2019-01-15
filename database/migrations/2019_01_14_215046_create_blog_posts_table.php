<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 511)->comment('The title of the posts');
            $table->string('slug', 511)->comment('The slug forming the link where the post will be acessed');
            $table->string('call', 511)->comment('The text used when the post is in the highlited posts area')->nullable();
            $table->text('content')->comment('The post content');
            $table->string('cover', 255)->comment('The post cover image content')->nullable();
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
        Schema::dropIfExists('blog_posts');
    }
}
