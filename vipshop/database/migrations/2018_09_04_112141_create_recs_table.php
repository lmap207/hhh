<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //收货地址表
    public function up()
    {
        Schema::create('recs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('用户id');
            $table->string('area')->comment('配送区域');
            $table->string('rname')->comment('收货人');
            $table->string('remail')->comment('邮箱');
            $table->string('rtel')->comment('手机号');
            $table->string('raddress')->comment('详细地址');
            $table->string('postcode')->comment('邮箱编码');
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
        Schema::dropIfExists('recs');
    }
}
