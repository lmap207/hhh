<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //商品详情表
    public function up()
    {
        Schema::create('detalis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('par')->comment('商品参数');
            $table->string('det')->comment('商品详情');
            $table->string('intro')->comment('商品简介');
            $table->integer('good_id')->comment('商品id');
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
        Schema::dropIfExists('detalis');
    }
}
