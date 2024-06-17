<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Project;
use Validator;
use App\Models\Team;
use App\Models\Member;
use App\Models\Role;
use App\Models\Batch;
use Auth;
// use App\Models\User;
use Illuminate\Support\Facades\Storage;


class SuperadminController extends Controller
{
    //
    public function superadmin_home()
    {
        $user = Auth::user();
        dd($user);
        return view('superadmin.home', compact('user'));
    }
    public function project_create(Request $request)
    {
        // Return the view first
        return view('superadmin.project-create');
    }


    public function show_dashboard()
    {
        $projectCount = Project::count();
        return view('superadmin.dashboard', compact('projectCount'));
    }
    public function project_list()
    {
        $projects = Project::all();
        if (request()->expectsJson()) {
            return response()->json([
                'success' => true,
                'messgae' => 'categroy fetched ',
                'projects' => $projects,
            ]);
        } else {
            return view('superadmin.project-list', compact('projects'));
        }
    }

    public function project_details(Request $request)
    {
        if ($request->ajax()) {
            $projectId = $request->query('projectId');

            // Fetch project details based on the projectId
            $project = Project::find($projectId);

            if ($project) {
                return response()->json(['status' => 200, 'project' => $project]);
            } else {
                return response()->json(['status' => 404, 'message' => 'Project not found']);
            }
        }

        // Render the view for non-AJAX requests
        $details = Project::all();
        return view('superadmin.project-detail', compact('details'));
    }

    public function project_store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'project_title' => 'required|string|max:255',
            'project_description' => 'required|string|max:1000',
            'project_source' => 'required|string',
        ]);

        $project = Project::create($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Project created successfully',
            'project' => $project
        ]);
    }

    public function accept(Request $request)
    {
        // Find the project by its title
        $project = Project::where('project_title', $request->project_title)->first();

        if ($project) {
            // Update the project status to "accepted"
            $project->project_status = 'accepted';
            $project->save();

            return response()->json([
                'success' => true,
                'message' => 'Project status updated to accepted',
                'project' => $project,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Project not found',
            ], 404);
        }
    }
    public function reject(Request $request)
    {

        // Find the project by title
        $project = Project::where('project_title', $request->project_title)->first();

        if ($project) {
            // Update project status to "rejected"
            $project->project_status = 'rejected';
            $project->save();

            return response()->json(['message' => 'Project rejected successfully'], 200);
        } else {
            return response()->json(['message' => 'Project not found'], 404);
        }
    }



    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function getProject($id)
{
    $project = Project::find($id);

    if ($project) {
        return response()->json([
            'status' => 200,
            'project' =>$project,
        ]);
    } else {
        return response()->json([
            'status' => 404,
            'message' => 'Project not found'
        ]);
    }
}

    public function getTeams()
    {
        $teams = Team::all();
        return response()->json([
            'status' => 200,
            'teams' => $teams
        ]);
    }

    public function show_team()
    {
        $team = Team::all();
        return view('superadmin.addteam', compact('team'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required|string|max:255|unique:teams,name', // Validate and ensure team name is unique
        ]);

        // Create new team instance
        $team = new Team();
        $team->name = $request->input('team_name');
        $team->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Team added successfully!');
    }

    public function updateProject(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'project_title' => 'required|string|max:255',
            'assignies' => 'required|string|max:255',
            'batch' => 'required|string|max:255',
            'team' => 'required|string|max:255',
            'platform' => 'required|string|max:255',
            'student' => 'required|string|max:255',
            'start_date' => 'required|date',
            'deadline' => 'required|date',
            'project_description' => 'required|string|max:1500',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        }

        try {
            // Find the project by ID
            $project = Project::find($id);

            // Check if project exists
            if (!$project) {
                return response()->json([
                    'status' => 404,
                    'message' => 'Project not found'
                ]);
            }

            // Update project attributes
            $project->project_title = $request->input('project_title');
            $project->batch = $request->input('batch');
            $project->team = $request->input('team');
            $project->assignies = $request->input('assignies');
            $project->platform = $request->input('platform');
            $project->student = $request->input('student');
            $project->start_date = $request->input('start_date');
            $project->deadline = $request->input('deadline');
            $project->project_description = $request->input('project_description');

            // Save the updated project
            $project->save();

            return response()->json([
                'status' => 200,
                'message' => 'Project updated successfully'
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions
            return response()->json([
                'status' => 500,
                'message' => 'Internal Server Error',
                'error' => $e->getMessage()
            ]);
        }
    }

    public function add_roles()
    {
        $roles = Role::all();
        return view('superadmin.addroles', compact('roles'));
    }

    public function addRole(Request $request)
    {
        // Validate the request data
        $request->validate([
            'role_name' => 'required|string|max:255|unique:roles,role_name', // Example validation rules
        ]);

        // Create a new role
        $role = new Role();
        $role->role_name = $request->role_name;

        // Save the role to the database
        if ($role->save()) {
            return response()->json(['success' => true, 'message' => 'Role added successfully'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'An error occurred while adding the role'], 500);
        }
    }

    public function getRoles()
    {
        $roles = Role::all();
        return response()->json(['roles' => $roles]);
    }


    public function show_batch()
    {
        $batches = Batch::all();
        return view('superadmin.addbatch', compact('batches'));
    }
    public function addBatch(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'batch_name' => 'required|string|max:255',
            // Add validation rules for other fields if needed
        ]);

        // Create a new batch using the Batch model
        $batch = new Batch();
        $batch->batch_name = $validatedData['batch_name'];
        // Set other properties if needed
        $batch->save();

        // Return a success response
        return response()->json(['message' => 'Batch added successfully'], 200);
    }

    public function getMembers()
    {
        $members = Member::all();
        return response()->json(['status' => 200, 'members' => $members]);
    }

    public function getStudents()
    {
        $students = Student::all();
        return response()->json(['status' => 200, 'students' => $students]);
    }

    public function getBatches()
    {
        $batches = Batch::all(); // Assuming you have a Batch model with a 'name' attribute

        return response()->json([
            'status' => 200,
            'batches' => $batches
        ]);
    }

    //total no of projects count
    public function getProjectCount()
    {
        $count = Project::count();
        return response()->json(['count' => $count]);
    }
    //total no of memebers count
    public function getMemberCount()
    {
        $memberCount = Member::count();
        return response()->json(['memberCount' => $memberCount]);
    }

    public function updateStatus(Request $request)
    {
        $batchId = $request->input('batch_id');
        $status = $request->input('status');

        $batch = Batch::findOrFail($batchId);
        $batch->batch_status = $status;
        $batch->save();

        return response()->json(['message' => 'Batch status updated successfully']);
    }


    //usee profile image 
    public function updateProfile(Request $request)
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
