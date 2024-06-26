<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Validator;
use App\Models\Batch;
use Auth;

class StudentController extends Controller
{
    public function show_student()
    {
        $student = Student::all();
        return view('admin.student', compact('student'));
    }
    public function student_register()
    {
        // Fetch all batches (assuming you want to check each batch status)
        $batchStatus = Batch::all();
        
        // Check if any batch is 'open'
        $isOpen = $batchStatus->contains('batch_status', 'open');

        if ($isOpen) {
            return view('student.student_register', compact('batchStatus'));
        } else {
            return response()->view('errors.404', [], 404);
        }
    }

    

    public function store_student(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'regno' => 'required|max:191',
            'name' => 'required|max:191',
            'email' => 'required|email|max:191',
            'password' => 'required|max:191',
            'department' => 'required|max:191',
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
            $student->department = $request->input('department');
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
                'message' => 'student added successfully',
            ]);
        }

    }

    public function student_list(Request $request)
    {
        $students = student::all();

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Projects fetched',
                'students' => $students,
            ]);
        } else {
            return view('student.student-list', compact('students'));
        }
    }

    public function accept(Request $request)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'regno' => 'required|string|exists:students,regno', // Validate the regno field
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'message' => 'Validation failed',
            'errors' => $validator->errors(),
        ], 422);
    }

    // Find the student by their registration number
    $student = Student::where('regno', $request->regno)->first();

    if ($student) {
        // Update the student status to "accepted" (or perform any other desired action)
        $student->status = 'accepted';
        $student->save();

        // Create a new user record in the user table
        $user = new User();
        $user->name = $student->name;
        $user->email = $student->email;
        $user->password = bcrypt($student->password); // Hash the password before storing
        $user->usertype = 'student'; // Set the user type as "student"

        try {
            $user->save();
        } catch (\Exception $e) {
            // Handle the error if user creation fails
            // You can log the error, revert changes, or return an appropriate response
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create user',
                'error' => $e->getMessage(),
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Student accepted',
            'user' => $user, // Optionally, return the created user record
        ], 200);
    } else {
        return response()->json([
            'status' => 'error',
            'message' => 'Student not found',
        ], 404);
    }
}
public function reject(Request $request)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'regno' => 'required|string|exists:students,regno', // Validate the regno field
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'message' => 'Validation failed',
            'errors' => $validator->errors(),
        ], 422);
    }

    // Find the student by their registration number
    $student = Student::where('regno', $request->regno)->first();

    if ($student) {
        // Check if the student status is currently accepted
        if ($student->status === 'accepted') {
            // Update the student status to "rejected"
            $student->update(['status' => 'rejected']);

            return response()->json([
                'status' => 'success',
                'message' => 'Student status updated to rejected',
                'student' => $student,
            ], 200);
        } else {
            // The student is already rejected
            return response()->json([
                'status' => 'error',
                'message' => 'Student status is already rejected',
            ], 400);
        }
    } else {
        return response()->json([
            'status' => 'error',
            'message' => 'Student not found',
        ], 404);
    }
}
public function edit($regno)
    {
        $student = Student::findOrFail($regno);
        return response()->json(['student' => $student]);
    }


    public function profileupdate(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // max 2MB
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Handle the profile image upload
    if ($request->hasFile('profile_image')) {
        // Get the uploaded file instance
        $image = $request->file('profile_image');

        // Generate a unique file name for the image
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Move the uploaded file to the public/images directory
        $image->move(public_path('images'), $imageName);

        // Delete previous image if it exists and is not the default profile image
        if ($user->image && $user->image != 'images/default_profile.png') {
            $previousImagePath = public_path($user->image);
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }

        // Update user's profile image field in the database
        $user->image = 'images/' . $imageName;
        $user->save();
    }

    // Redirect back with success message
    return back()->with('success', 'Profile image updated successfully.');
}

}
