<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    /**
     * 商品属于分类
     */
    public function cate()
    {
        return $this->belongsTo('App\Cate');
    }

    public function pro()
    {
    	return $this->belongsTo('App\Pro');
    }
}
