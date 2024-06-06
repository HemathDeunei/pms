<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Validator;
use App\Models\Team;
use App\Models\Member;
use App\Models\Role;
use App\Models\Batch;

class SuperadminController extends Controller
{
    //
    public function superadmin_home()
    {
        return view('superadmin.home');
    }
    public function project_create(Request $request)
    {
        // Return the view first
        return view('superadmin.project-create');
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

    public function project_details()
    {
        return view('superadmin.project-detail');
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
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'project_title' => 'required|string|exists:projects,project_title',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

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
        // Validate request
        $request->validate([
            'project_title' => 'required|exists:projects,project_title',
        ]);

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


    public function getProject($id)
    {
        $project = Project::find($id);

        if ($project) {
            return response()->json([
                'status' => 200,
                'project' => $project
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
        return view('superadmin.addteam');
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
        $validator = Validator::make($request->all(), [
            'project_title' => 'required|max:255',
            'assignies' => 'required',
            'task' => 'required',
            // 'privacy' => 'required',
            // 'start_date' => 'required|date',
            // 'deadline' => 'required|date',
            'project_description' => 'required',
            // 'client' => 'required',
            // 'budget' => 'required|numeric',
            'team' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        }

        try {
            $project = Project::find($id);

            if (!$project) {
                return response()->json([
                    'status' => 404,
                    'message' => 'Project not found'
                ]);
            }

            $project->project_title = $request->input('project_title');
            $project->assignies = $request->input('assignies');
            $project->task = $request->input('task');
            // $project->privacy = $request->input('privacy');
            // $project->start_date = $request->input('start_date');
            // $project->deadline = $request->input('deadline');
            $project->project_description = $request->input('project_description');
            // $project->client = $request->input('client');
            // $project->budget = $request->input('budget');
            $project->team = $request->input('team');

            $project->save();

            return response()->json([
                'status' => 200,
                'message' => 'Project updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Internal Server Error',
                'error' => $e->getMessage()
            ]);
        }
    }

    public function getMembers()
    {
        $members = Member::all();
        return response()->json([
            'status' => 200,
            'members' => $members
        ]);
    }


    public function add_roles(){
        return view('superadmin.addroles');
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


    public function show_batch(){
        return view('superadmin.addbatch');
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
}
