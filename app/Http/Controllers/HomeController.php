<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    //

    public function redirect(){


        $usertype=Auth::user()->usertype;

        if($usertype=='1'){

            return view('Admin.pages.index');
        }
        else{


            return view('shop.index');
        }
    }

}
