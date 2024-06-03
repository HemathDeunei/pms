<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Member;
use App\Models\User;

class MemberController extends Controller
{
    //
    public function member_register()
    {
        return view('member.member_register');
    }

    public function member_list()
    {
        $members = Member::all();
        if (request()->expectsJson()) {
            return response()->json([
                'success' => true,
                'messgae' => 'categroy fetched ',
                'members' => $members,
            ]);
        } else {
            return view('member.member-list', compact('members'));
        }

    }
    // return response()->json($members);
    // return view('member.member-list',compact('members'));

    public function add_member(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bio_id' => 'required|max:191',
            'user_name' => 'required|max:191',
            'password' => 'required|max:191',
            'personal_email' => 'required|email|max:191',
            'official_email' => 'required|email|max:191',
            'employee_id' => 'required|max:191',
            'experience' => 'required|max:191',
            'linkedin' => 'required|max:191',
            'portfolio' => 'required|max:191',
            'mobile_number' => 'required|max:191',
            'tech_stack' => 'required|max:191',
            'designation' => 'required|max:191',
            'date_of_joining' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $developer = new Member;
            $developer->bio_id = $request->input('bio_id');
            $developer->user_name = $request->input('user_name');
            $developer->password = $request->input('password');
            $developer->personal_email = $request->input('personal_email');
            $developer->official_email = $request->input('official_email');
            $developer->employee_id = $request->input('employee_id');
            $developer->experience = $request->input('experience');
            $developer->linkedin = $request->input('linkedin');
            $developer->portfolio = $request->input('portfolio');
            $developer->mobile_number = $request->input('mobile_number');
            $developer->tech_stack = $request->input('tech_stack');
            $developer->designation = $request->input('designation');
            $developer->date_of_joining = $request->input('date_of_joining');
            // Get the designation field value
            $developer->save();

            // Redirect back to the developer registration page with a success message
            return response()->json([
                'status' => 200,
                'message' => 'Developer added successfully',
            ]);
        }
    }
    public function getMember($id)
    {
        $member = Member::find($id);
        if ($member) {
            return response()->json([
                'status' => 200,
                'member' => $member,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Member Found.'
            ]);
        }
    }

    public function updateMember(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'bio_id' => 'required|max:191',
        'user_name' => 'required|max:191',
        'password' => 'required|max:191',
        'personal_email' => 'required|email|max:191',
        'official_email' => 'required|email|max:191',
        'employee_id' => 'required|max:191',
        'experience' => 'required|max:191',
        'linkedin' => 'required|max:191',
        'portfolio' => 'required|max:191',
        'mobile_number' => 'required|max:191',
        'tech_stack' => 'required|max:191',
        'designation' => 'required|max:191',
        'date_of_joining' => 'required|date',
        'team'=>'required|max:191',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 400,
            'errors' => $validator->messages()
        ]);
    } else {
        $member = Member::find($id);
        if ($member) {
            // Update the member's properties
            $member->bio_id = $request->input('bio_id');
            $member->user_name = $request->input('user_name');
            $member->password = $request->input('password');
            $member->personal_email = $request->input('personal_email');
            $member->official_email = $request->input('official_email');
            $member->employee_id = $request->input('employee_id');
            $member->experience = $request->input('experience');
            $member->linkedin = $request->input('linkedin');
            $member->portfolio = $request->input('portfolio');
            $member->mobile_number = $request->input('mobile_number');
            $member->tech_stack = $request->input('tech_stack');
            $member->designation = $request->input('designation');
            $member->date_of_joining = $request->input('date_of_joining');
            $member->team = $request->input('team');
            $member->save(); // Save the updated member

            return response()->json([
                'status' => 200,
                'message' => 'Member Updated Successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Member Found.'
            ]);
        }
    }
}

public function accept(Request $request)
{
    // Validate request
    $request->validate([
        'personal_email' => 'required|email:users,email',
        'user_type' => 'required|in:tl,member' // Validate user type
    ]);

    // Find the member record by email
    $member = Member::where('personal_email', $request->personal_email)->first();

    if ($member) {
        // Retrieve necessary data from member record
        $password = $member->password;
        $userName = $member->user_name;

        // Create new user with member's name, personal email, and password
        $user = new User();
        $user->name = $userName; // Set user's name from member's record
        $user->email = $member->personal_email;
        $user->password = bcrypt($password); // Encrypt the password
        $user->usertype = $request->user_type; // Set user's type
        $user->save();

        // Update member status to "accepted"
        $member->status = 'accepted'; // Update status to 'accepted'
        $member->save();

        // Customize the success message based on user type
        $message = ($request->user_type == 'tl') ? 'TL added and stored successfully' : 'Member added and stored successfully';

        return response()->json(['message' => $message], 200);
    } else {
        return response()->json(['message' => 'Member not found'], 404);
    }
}
public function reject(Request $request)
{
    // Validate request
    $request->validate([
        'personal_email' => 'required|email|exists:members,personal_email',
    ]);

    // Find the member record by email
    $member = Member::where('personal_email', $request->personal_email)->first();

    if ($member) {
        // Update member status to "rejected"
        $member->status = 'rejected'; // Update status to 'rejected'
        $member->save();

        // Find the user associated with the rejected member
        $user = User::where('email', $request->personal_email)->first();

        if ($user) {
            // Update user status to "rejected"
            $user->status = 'rejected';
            $user->save();
        }

        return response()->json(['message' => 'Member rejected successfully'], 200);
    } else {
        return response()->json(['message' => 'Member not found'], 404);
    }
}
}
