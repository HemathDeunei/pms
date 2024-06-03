<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use Validator;

class FacultyController extends Controller
{
    //
    public function create_faculty()
    {
        return view('superadmin.addfaculty');
    }

    public function store_faculty(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:191|unique:faculties,email',
            'mobile' => 'required|string|max:20',
            'department' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $faculty = new Faculty();
            $faculty->name = $request->name;
            $faculty->email = $request->email;
            $faculty->mobile = $request->mobile;
            $faculty->department = $request->department;
            $faculty->password = bcrypt($request->password);
            $faculty->save();

            return redirect()->back()->with('success', 'Faculty added successfully!');
        } catch (\Exception $e) {
            // Log the error
            \Log::error($e->getMessage());

            // Redirect back with error message
            return redirect()->back()->with('error', 'An error occurred while adding faculty. Please try again.');
        }
    }
}
