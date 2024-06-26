<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Member;
use App\Models\User;
use App\Models\Team;
use App\Models\Role;


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

    public function getteam($id)
    {
        $teams = Team::find($id);
        if ($teams) {
            return response()->json([
                'status' => 200,
                'member' => $teams,
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
            'team' => 'required|max:191',
            'roles_name' => 'required|max:191', // Validate roles_name
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
                $member->roles_name = $request->input('roles_name'); // Update roles_name
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
    // Find the member record by email
    $member = Member::where('personal_email', $request->personal_email)->first();

    if ($member) {
        // Check if a user already exists for this member
        $user = User::where('email', $member->personal_email)->first();

        if ($user) {
            // If user already exists, update the user details
            $user->name = $member->user_name; // Update user's name
            $user->usertype = $request->user_type; // Update user's type
            $user->roles_name = $member->roles_name; // Update user's role
            $user->status = 'accepted'; // Update user's status
            $user->save();
        } else {
            // If user does not exist, create a new user
            $newUser = new User();
            $newUser->name = $member->user_name;
            $newUser->email = $member->personal_email;
            $newUser->password = bcrypt($member->password);
            $newUser->usertype = $request->user_type;
            $newUser->roles_name = $member->roles_name;
            $newUser->status = 'accepted'; // Set user's status
            $newUser->save();
        }

        // Update member status to "accepted"
        $member->status = 'accepted';
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
