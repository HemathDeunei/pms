<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function login(){
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=="admin"){
                // return 'superadmin....';
                return view('superadmin.home');
            }elseif($usertype=="tl"){
                return view('tl.tlhome');
            }elseif($usertype=="member"){
                return view('member.memberhome');
            }elseif($usertype=="student"){
                return view('student.studenthome');
            }elseif($usertype=="faculty"){
                return view('faculty.facultyhome');
            }
            else{
                return redirect()->back();
            }

        }
    }
}
