<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperadminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FacultyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/',[HomeController::class,'home']);
Route::get('/homepage',[LoginController::class,'login']);

//super Admin
Route::get('/superadmin_home',[SuperadminController::class,'superadmin_home']);
Route::get('/project-create',[SuperadminController::class,'project_create'])->name('project-create');
Route::get('/project-list',[SuperadminController::class,'project_list'])->name('project-list');
route::get('/project-details',[SuperadminController::class,'project_details'])->name('project-details');
Route::post('/project_store',[SuperadminController::class,'project_store'])->name('project_store');
Route::post('/projects_accept', [SuperadminController::class, 'accept'])->name('project_accept');
Route::post('/reject-project', [SuperadminController::class, 'reject']);
Route::get('/add-team', [SuperadminController::class, 'show_team'])->name('show_team');
Route::get('get_team',[SuperadminController::class,'display_team']);
Route::post('/store-team', [SuperadminController::class, 'store'])->name('store_team');


//developer page
Route::get('/member_register',[MemberController::class,'member_register'])->name('member_register');
Route::post('/add-member',[MemberController::class,'add_member'])->name('add_member');
Route::get('/member-list',[MemberController::class,'member_list'])->name('member-list');
Route::get('/get-member/{id}', [MemberController::class, 'getMember']);
Route::post('/update-member/{id}', [MemberController::class, 'updateMember']);
Route::post('/accept', [MemberController::class, 'accept'])->name('accept');
Route::post('/reject', [MemberController::class, 'reject'])->name('reject');


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



//project 
// Route::get('/project_register',[ProjectController::class,'project_register']);



Route::get('/create-faculty', [FacultyController::class, 'create_faculty'])->name('add_faculty');
Route::post('/add-faculty', [FacultyController::class, 'store_faculty'])->name('store_faculty');