<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSharingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sharing', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('post_link');
            $table->string('platform');
            $table->string('facebook_id')->nullable();
            $table->string('facebook_post_id')->nullable();
            $table->double('price', 9, 3);
            $table->boolean('paid');
            $table->tinyInteger('verify');
            $table->boolean('status');
            $table->string('notes');
            $table->date('end_date');
            $table->date('start_date');
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
        Schema::dropIfExists('user_sharing');
    }
}
