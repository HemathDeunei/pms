<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Validator;
use App\Models\Team;

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


    public function editProject($id)
    {
        $project = Project::find($id);
        if ($project) {
            return response()->json([
                'status' => 200,
                'project' => $project,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Project not found.',
            ]);
        }
    }

    public function show_team(){
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
    
    
}
