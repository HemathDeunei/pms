<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TlController extends Controller
{
    //
    public function tlhome(){
        $user=User::all();
        return view('tl.tlhome',compact('user'));
    }
}
