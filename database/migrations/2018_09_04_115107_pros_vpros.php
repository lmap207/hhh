<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProsVpros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //中间表 （属性表和属性值表）
    public function up()
    {
        Schema::create('pros_vpros', function (Blueprint $table)
            {
            $table->integer('pro_id')->comment('属性名id');
            $table->integer('vpro_id')->comment('属性值id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pros_vpros');
    }
}
