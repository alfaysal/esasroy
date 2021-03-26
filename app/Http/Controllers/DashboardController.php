<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
      public function dashboard(){
        return view('back-end.home_page');
    }

     public function frontend(){
        return view('front-end.home_page');
    }

    public function setPassword(){
    	return view('front-end.authentication.set_password');
    }
}
