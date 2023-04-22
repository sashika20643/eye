<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fcat;
use App\Models\Color;
use App\Models\colorF;


use App\Models\Frame;
use RealRashid\SweetAlert\Facades\Alert;

class FrameController extends Controller
{
    //

    public function AddProductview(){
        $cat=Fcat::all();
        $color=Color::all();
        return view('Admin.pages.frames.Addframe')->with('catagories',$cat)->with('colors',$color);
    }
    public function addproduct(Request $request){



        $this->validate($request,[
            'title' =>'required|min:3',
            'description' =>'required|min:3',
            'image' =>'required',
            'quantity' =>'required',
            'price' =>'required',
            'frame'=>'required',
            'discount_price' =>'required|min:3',
        ]);

      $product=new Frame;
      $product->title=$request->title;
      $product->description=$request->description;
      $product->quantity=$request->quantity;
      $product->price=$request->price;
      $product->catagory=$request->catagory;
      $product->discount_price=$request->discount_price;
      $product->Size=$request->size;
      $image=$request->image;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('Frame',$imagename);
      $product->image=$imagename;
      $product->save();
      $checkedCheckboxes = $request->input('checkbox');
      foreach ($checkedCheckboxes as $checkboxValue) {
         $colorf=new colorF;
         $colorf->cid=$checkboxValue;
         $colorf->fid=$product->id;
         $colorf->save();

      }
      Alert::success('Frame Aded successfully',"You have Aded the Frame");

      return redirect()->back()->with('massege','Frame added successfully');


    }

    public function allproductview(){
        $products=Frame::all();
        return view('Admin.pages.frames.showframe')->with('products',$products);
    }

    public function DeleteProduct($id){

        $product=Frame::find($id);
        unlink("Frame/".$product->first()->image);
        $product->delete();
        Alert::success('Frame deleted successfully',"You have deleted the Frame");

        return redirect()->back()->with('massege','Frame deled successfully');
    }



    public function EditProduct($id){
        $cat=Fcat::all();
        $color=Color::all();
        $product=Frame::find($id);
        $colors = $product->colors;

        return view('Admin.pages.frames.Editframe')->with('product',$product)->with('catagories',$cat)->with('colors',$color);
    }


    public function updateproduct(Request $request){


        $this->validate($request,[
            'title' =>'required|min:3',
            'description' =>'required|min:3',

            'quantity' =>'required',
            'price' =>'required',
            'discount_price' =>'required|min:3',
        ]);


      $product=Frame::where('id',$request->id)->first();

      $product->title=$request->title;
      $product->description=$request->description;
      $product->quantity=$request->quantity;
      $product->price=$request->price;
      $product->catagory=$request->catagory;
      $product->discount_price=$request->discount_price;
      if($request->hasFile('image')){
        unlink("Frame/".$product->image);
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Frame',$imagename);
        $product->image=$imagename;
      }

      $product->save();

      return redirect()->back()->with('massege','Frame updated successfully');


    }


    public function searchp(Request $request){
        $searchq=$request->searchq;
        // return $searchq;
              $products=Frame::where('title','LIKE','%%'.$searchq.'%')->get();
        return view('Admin.pages.frames.showframe')->with('products',$products);

            }


}
