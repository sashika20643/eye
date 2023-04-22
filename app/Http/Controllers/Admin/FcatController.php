<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fcat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FcatController extends Controller
{

public function catagories(){
    $cat=Fcat::all();
    return view('Admin.pages.catagory')->with('catagories',$cat);
}
public function CreateCatagory(Request $request){

    $this->validate($request,[
        'cname' =>'required|min:3'
    ]);
    $cat=new Fcat;
    $cat->name=$request->cname;
    $cat->save();
    return redirect()->back()->with('massege','categery added successfully');
}

public function DeleteCatagory($id){

    $cat=Fcat::find($id);
    $cat->delete();
Alert::success('Catagory deleted successfully',"You have deleted the category");

    return redirect()->back()->with('massege','categery deled successfully');
}
}
