<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    //
    public function home(){
        return view('home.index');
    }

    public function homepage(){
        return view('home.home');
    }

    
}
