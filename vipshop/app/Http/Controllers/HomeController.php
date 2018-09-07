<?php

namespace App\Http\Controllers;

use App\Good;
use App\Link;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	//友情链接
    	 $links = Link::OrderBy('order','desc')->get();
    	 $goods  = Good::all();
      return view('home.index',compact('links','goods'));
    }
}
