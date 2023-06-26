<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lcat;
use App\Models\Lense;
use App\Models\Fcat;
use App\Models\Frame;
use App\Models\Color;
class PageController extends Controller
{
    //

    public function index(Request $request){
        $cartItems = $request->session()->get('cart.items');


    return view('shop.index',compact('cartItems'));

    }


public function Clens(){
    $cat=Lcat::all();
    $lenses=Lense::where('catagory','computer production glass')->get();
    return view('shop.pages.ContactLensShop',compact('cat','lenses'));
}

public function Frames(){
    $colors=color::all();
    $frames=Frame::all();
    $catagories=Fcat::all();
    return view('shop.pages.frames',compact('colors','frames','catagories'));
}

public function selectFrames($id){
    $cat=color::all();
    $frames=Frame::all();
    $lens = $id;
session()->put('selected_lens', $lens);
    return view('shop.pages.selectFrames',compact('cat','frames'));
}

public function processOrder($id)
{

    $frame=Frame::where('id',$id)->first();
 $lid=session()->get('selected_lens');

 $lens=Lense::where('id',$lid)->first();

  return view('shop.pages.hybridproduct',compact('frame','lens'));


}


public function cpglass(){
    $cat=Lcat::all();
    $lenses=Lense::where('catagory','computer production glass')->get();
    return view('shop.pages.cpglass',compact('cat','lenses'));
}

public function singleframe(Request $request)
{
    $id = $request->input('id');
    $frame = Frame::where('id', $id)->first();

    return response()->json($frame);

    // Do something with the id value...

}
public function singleLens(Request $request)
{
    $id = $request->input('id');
    $lens = Lense::where('id', $id)->first();

    return response()->json($lens);

    // Do something with the id value...

}

}
