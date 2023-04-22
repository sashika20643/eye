<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lcat;
use App\Models\Lense;
class PageController extends Controller
{
    //

    public function index(){
    return view('shop.index');

    }


public function lens(){
    $cat=Lcat::all();
    $lenses=Lense::all();
    return view('shop.shop',compact('cat','lenses'));
}

}
