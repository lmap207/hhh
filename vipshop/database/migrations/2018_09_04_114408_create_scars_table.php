<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //购物车表
    public function up()
    {
        Schema::create('scars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('good_id')->comment('商品id');
            $table->integer('gsize')->default(0)->comment('商品数量');
            $table->integer('rec_id')->comment('收货地址id');
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
        Schema::dropIfExists('scars');
    }
}
