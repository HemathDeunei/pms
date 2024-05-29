<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function show_admin()
    {
        return view('admin.adminhome');
    }

    public function developer_list()
    {
        return view('admin.developer-list');
    }

    public function getStudents()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function fetchDevelopers()
    {
        $developers = Developer::all(); // Fetch all developers from the database
        return response()->json($developers);
    }

    public function acceptDeveloper(Request $request)
    {
        // Validate request
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        // Find the developer record by personal_email
        $developer = Developer::where('personal_email', $validatedData['email'])->first();

        if ($developer) {
            // Create new user with developer's personal_mail as email, name, and password
            $user = new User();
            $user->name = $developer->user_names; // Set user's name from developer's record
            $user->email = $developer->personal_email; // Set user's email from developer's personal_email
            $user->password = Hash::make($developer->password); // Hash the password
            $user->usertype = 'developer'; // Set user's type to 'developer'
            $user->save();

            // Update developer status to "accepted"
            $developer->status = 'accepted'; // Update status to 'accepted'
            $developer->save();

            return response()->json(['message' => 'Developer accepted and user stored successfully'], 200);
        } else {
            return response()->json(['message' => 'Developer not found'], 404);
        }
    }

    public function rejectDeveloper(Request $request)
    {
        // Validate request
        $request->validate([
            'email' => 'required|email',
        ]);

        // Find the developer record by email
        $developer = Developer::where('personal_email', $request->email)->first();

        if ($developer) {
            // Update developer status to "rejected"
            $developer->status = 'rejected';
            $developer->save();

            return response()->json(['message' => 'Developer rejected successfully'], 200);
        } else {
            return response()->json(['message' => 'Developer not found'], 404);
        }
    }
    public function accept(Request $request)
    {
        // Validate request
        $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        // Find the student record by email
        $student = Student::where('email', $request->email)->first();

        if ($student) {
            // Retrieve password from student record
            $password = $student->password;

            // Create new user with student's name, email, and password
            $user = new User();
            $user->name = $student->name; // Set user's name from student's record
            $user->email = $request->email;
            $user->password = $password; // Store the password as is
            $user->usertype = 'student'; // Set user's type to 'student'
            $user->save();

            // Update student status to "accepted"
            $student->status = 'accepted'; // Update status to 'accepted'
            $student->save();

            return response()->json(['message' => 'Student accepted and user stored successfully'], 200);
        } else {
            return response()->json(['message' => 'Student not found'], 404);
        }
    }


    public function reject(Request $request)
    {
        // Validate request
        $request->validate([
            'email' => 'required|email',
        ]);

        // Find the student record by email
        $student = Student::where('email', $request->email)->first();

        if ($student) {
            // Update student status to "rejected"
            $student->status = 'rejected';
            $student->save();

            return response()->json(['message' => 'Student rejected successfully'], 200);
        } else {
            return response()->json(['message' => 'Student not found'], 404);
        }
    }
}
