<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('facebook_url')->nullable();
            $table->boolean('is_fanpage')->nullable();
            $table->string('phone_number',20);
            $table->string('address',100);
            $table->float('zalo_price')->default(0);
            $table->float('twitter_price')->default(0);
            $table->float('facebook_price')->default(0);
            $table->double('amount',9,3);
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
        Schema::dropIfExists('user_info');
    }
}
