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
        return view('faculty.addfaculty');
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

    public function index()
{
    $faculties = Faculty::all();

    if (request()->expectsJson()) {
        return response()->json([
            'success' => true,
            'message' => 'Faculties fetched',
            'faculties' => $faculties,
        ]);
    } else {
        return view('faculty.faculty-list', compact('faculties'));
    }
}

    public function edit($id)
    {
        $faculty = Faculty::find($id);
        if ($faculty) {
            return response()->json(['faculty' => $faculty, 'status' => 200]);
        } else {
            return response()->json(['message' => 'Faculty not found', 'status' => 404]);
        }
    }

    public function update(Request $request, $id)
    {
        $faculty = Faculty::find($id);
        if ($faculty) {
            $faculty->name = $request->input('name');
            $faculty->email = $request->input('email');
            $faculty->mobile = $request->input('mobile');
            $faculty->department = $request->input('department');
            $faculty->password = bcrypt($request->input('password'));
            $faculty->save();

            return response()->json(['message' => 'Faculty updated successfully', 'status' => 'success']);
        } else {
            return response()->json(['message' => 'Faculty not found', 'status' => 'error']);
        }
    }

}
