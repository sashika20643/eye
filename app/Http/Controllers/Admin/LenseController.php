<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lcat;
use App\Models\Lense;


class LenseController extends Controller
{


    public function AddProductview(){
        $cat=Lcat::all();

        return view('Admin.pages.lense.Addlense')->with('catagories',$cat);
    }
    public function addproduct(Request $request){



        $this->validate($request,[
            'title' =>'required|min:3',
            'description' =>'required|min:3',
            'image' =>'required',
            'quantity' =>'required',
            'price' =>'required',
            'discount_price' =>'required|min:3',
        ]);

      $product=new Lense;
      $product->title=$request->title;
      $product->description=$request->description;
      $product->quantity=$request->quantity;
      $product->price=$request->price;
      $product->catagory=$request->catagory;
      $product->discount_price=$request->discount_price;
      $image=$request->image;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('Lense',$imagename);
      $product->image=$imagename;
      $product->save();
      $checkedCheckboxes = $request->input('checkbox');

      Alert::success('Lense Aded successfully',"You have Aded the Lense");

      return redirect()->back()->with('massege','Lense added successfully');


    }

    public function allproductview(){
        $products=Lense::all();
        return view('Admin.pages.lense.showlense')->with('products',$products);
    }

    public function DeleteProduct($id){

        $product=Lense::find($id);
        unlink("Lense/".$product->first()->image);
        $product->delete();
        Alert::success('Lense deleted successfully',"You have deleted the Lense");

        return redirect()->back()->with('massege','Lense deled successfully');
    }



    public function EditProduct($id){
        $cat=Lcat::all();

        $product=Lense::find($id);
        $colors = $product->colors;

        return view('Admin.pages.lense.Editlense')->with('product',$product)->with('catagories',$cat);
    }


    public function updateproduct(Request $request){


        $this->validate($request,[
            'title' =>'required|min:3',
            'description' =>'required|min:3',

            'quantity' =>'required',
            'price' =>'required',
            'discount_price' =>'required|min:3',
        ]);


      $product=Lense::where('id',$request->id)->first();

      $product->title=$request->title;
      $product->description=$request->description;
      $product->quantity=$request->quantity;
      $product->price=$request->price;
      $product->catagory=$request->catagory;
      $product->discount_price=$request->discount_price;
      if($request->hasFile('image')){
        unlink("Lense/".$product->image);
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Lense',$imagename);
        $product->image=$imagename;
      }

      $product->save();

      return redirect()->back()->with('massege','Lense updated successfully');


    }


    public function searchp(Request $request){
        $searchq=$request->searchq;
        // return $searchq;
              $products=Lense::where('title','LIKE','%%'.$searchq.'%')->get();
        return view('Admin.pages.lense.showlense')->with('products',$products);

            }



}
