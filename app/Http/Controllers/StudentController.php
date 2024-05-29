<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Validator;

class StudentController extends Controller
{
    public function show_student()
    {
        $student = Student::all();
        return view('admin.student', compact('student'));
    }
    public function student_register()
    {
        return view('student.student_register');
    }

    public function store_student(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'regno' => 'required|max:191',
            'name' => 'required|max:191',
            'email' => 'required|email|max:191',
            'password' => 'required|max:191',
            'project_title' => 'required|max:191',
            'project_description' => 'required|max:191',
            'mentor_name' => 'required|max:191',
            'mentor_number' => 'required|max:191',
            'student_mobile' => 'required|max:191',
            'batch_year' => 'required|max:191', // Add the designation field validation rule
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $student = new student;
            $student->regno = $request->input('regno');
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->password = $request->input('password');
            $student->project_title = $request->input('project_title');
            $student->project_description = $request->input('project_description');
            $student->mentor_name = $request->input('mentor_name');
            $student->mentor_number = $request->input('mentor_number');
            $student->student_mobile = $request->input('student_mobile');
            $student->batch_year = $request->input('batch_year');
            $student->save();

            // Redirect back to the developer registration page with a success message
            return response()->json([
                'status' => 200,
                'message' => 'Developer added successfully',
            ]);
        }

    }
}
