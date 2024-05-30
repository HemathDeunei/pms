<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    //
    public function superadmin_home(){
        return view('superadmin.home');
    }
    public function project_create(){
        return view('superadmin.project-create');
    }
    public function project_list(){
        return view('superadmin.project-list');
    }

    public function project_details(){
        return view('superadmin.project-detail');
    }
}
