<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TlController extends Controller
{
    //
    public function tlhome(){
        return view('tl.tlhome');
    }
}
