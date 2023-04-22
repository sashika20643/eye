<?php

namespace App\Http\Controllers\Admin;
use App\Models\Color;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ColorController extends Controller
{

    public function catagories(){
        $cat=Color::all();
        return view('Admin.pages.frames.Colorcat')->with('catagories',$cat);
    }
    public function CreateCatagory(Request $request){

        $this->validate($request,[
            'cname' =>'required|min:3'
        ]);
        $cat=new Color;
        $cat->name=$request->cname;
        $cat->save();
        return redirect()->back()->with('massege','categery added successfully');
    }

    public function DeleteCatagory($id){

        $cat=Color::find($id);
        $cat->delete();
    Alert::success('Catagory deleted successfully',"You have deleted the category");

        return redirect()->back()->with('massege','categery deled successfully');
    }


}
