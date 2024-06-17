<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperadminController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',[HomeController::class,'home']);
Route::get('/homepage',[LoginController::class,'login']);
// Route::get('/homepage',[LoginController::class,'role_login']);

//super Admin
// Route::get('/dashboard', 'DashboardController@showDashboard')->middleware('auth');

Route::get('/superadmin_home',[SuperadminController::class,'superadmin_home'])->middleware('auth');
Route::get('/project-create',[SuperadminController::class,'project_create'])->name('project-create');
Route::get('/project-list',[SuperadminController::class,'project_list'])->name('project-list');
Route::get('/dashboard_show',[SuperadminController::class,'show_dashboard'])->name('show_dashboard');
route::get('/project-details',[SuperadminController::class,'project_details'])->name('project-details');
Route::post('/project_store',[SuperadminController::class,'project_store'])->name('project_store');
Route::post('/projects_accept', [SuperadminController::class, 'accept'])->name('project_accept');
Route::post('/reject-project', [SuperadminController::class, 'reject']);
Route::get('/add-team', [SuperadminController::class, 'show_team'])->name('show_team');
Route::get('/add-roles',[SuperadminController::class,'add_roles'])->name('show_roles');
Route::get('get_team',[SuperadminController::class,'display_team']);
Route::post('/store-team', [SuperadminController::class, 'store'])->name('store_team');
Route::get('/get-project/{id}', [SuperadminController::class, 'getProject']);
Route::get('/get-teams', [SuperadminController::class, 'getTeams']);
Route::get('/get-members', [SuperadminController::class, 'getMembers']);
Route::get('/get-students',[SuperadminController::class,'getstudents']);
Route::get('/get-batches', [SuperadminController::class, 'getBatches']);
Route::put('/update-project/{id}', [SuperadminController::class, 'updateProject']);
Route::post('/add_roles', [SuperadminController::class, 'addRole'])->name('add_roles');
Route::get('/get_roles', [SuperadminController::class, 'getroles'])->name('get_roles');
Route::get('/show_batch',[SuperadminController::class,'show_batch'])->name('show_batch');
Route::post('/add-batch', [SuperadminController::class, 'addBatch'])->name('add_batch');
Route::post('/open-batch/{id}', [SuperadminController::class, 'open'])->name('open_batch')->middleware('auth');
Route::post('/close-batch/{id}', [SuperadminController::class, 'close'])->name('close_batch')->middleware('auth');
Route::post('/update-batch-status', [SuperadminController::class, 'updateStatus'])->name('update_batch_status');
Route::get('/project_count', [SuperadminController::class, 'getProjectCount']);

Route::get('/members/count',[SuperadminController::class,'getMemberCount']);
Route::post('/update-profile',[SuperadminController::class,'updateProfile'])->name('update.profile');
Route::get('/project/{id}', [SuperadminController::class, 'project_details'])->name('project.details');//to get the particlar project detail with respect to id



//member page
Route::get('/member_register',[MemberController::class,'member_register'])->name('member_register');
Route::post('/add-member',[MemberController::class,'add_member'])->name('add_member');
Route::get('/member-list',[MemberController::class,'member_list'])->name('member-list');
Route::get('/get-member/{id}', [MemberController::class, 'getMember']);
Route::post('/update-member/{id}', [MemberController::class, 'updateMember']);
Route::post('/accept', [MemberController::class, 'accept'])->name('accept');
Route::post('/reject', [MemberController::class, 'reject'])->name('reject');

// Route::get('get-team',[MemberController::class,'getteam']);



//student page
Route::get('/students',[StudentController::class,'show_student']);
Route::get('student',[StudentController::class,'student_register'])->name('student');
Route::post('/add_student',[StudentController::class,'store_student'])->name('add_student');
// Route::get('/student/fetch-students',[StudentController::class,'fetchstudent']);
Route::get('/student_list',[StudentController::class,'student_list'])->name('student_list');
// Route::post('/students', [StudentController::class, 'store'])->name('students.store');81
Route::get('/fetch_students',[StudentController::class,'student_list'])->name('fetch_students');
Route::post('/accept_student', [StudentController::class, 'accept'])->name('accept_student');
Route::post('/reject_student', [StudentController::class, 'reject'])->name('reject_student');
Route::post('/update-profile',[StudentController::class,'profileupdate'])->name('update.profile');


//project 
// Route::get('/project_register',[ProjectController::class,'project_register']);


//faculty page
Route::get('/create-faculty', [FacultyController::class, 'create_faculty'])->name('add_faculty');
Route::post('/add-faculty', [FacultyController::class, 'store_faculty'])->name('store_faculty');
Route::get('/faculty-list', [FacultyController::class, 'index'])->name('faculty_list');
Route::get('/get-faculty/{id}', [FacultyController::class, 'edit'])->name('faculty_show');
Route::post('/update-faculty/{id}', [FacultyController::class, 'update']);
