<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Member;

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
        if(request()->expectsJson()){
            return response()->json([
                'success'=>true,
                'messgae'=>'categroy fetched ',
                'members'=>$members,
            ]);
        }
            else{
                return view('member.member-list',compact('members'));
            }
        
        }
        // return response()->json($members);
        // return view('member.member-list',compact('members'));
    
    public function add_member(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bio_id' => 'required|max:191',
            'user_name' => 'required|max:191',
            'password'=>'required|max:191',
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

}
