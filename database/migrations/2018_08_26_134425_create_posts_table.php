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
            $table->increments('id');
            $table->string('title');
            $table->string('permalink')->nullable();
            $table->boolean('free_post')->default(true);
            $table->boolean('enable_campaign')->default(false);
            $table->decimal('budget', 15, 8)->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('platform')->nullable();
            $table->integer('primary_category');
            $table->enum('post_type', array('normal', 'video'));
            $table->string ('description');
            $table->string ('keywords');
            $table->integer('image_feature');
            $table->integer('viewer');
            $table->integer('sort');
            $table->longText('content');
            $table->softDeletes();
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
