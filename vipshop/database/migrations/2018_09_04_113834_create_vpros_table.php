<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //属性值表
    public function up()
    {
        Schema::create('vpros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value')->comment('属性值');
            $table->integer('pro_id')->comment('属性名id');
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
        Schema::dropIfExists('vpros');
    }
}
