<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vpro extends Model
{
    public function pro()
    {

    	 return $this->belongsTo('App\Pro');
    }
}
