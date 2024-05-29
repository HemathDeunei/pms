<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
// Route::get('/login')

//admin page

Route::get('/admin_home_page',[AdminController::class,'show_admin']);
Route::get('/developers-list',[AdminController::class,'developer_list']);
Route::get('/admin/fetch-developers',[AdminController::class,'fetchDevelopers']);
Route::get('/get_students', [AdminController::class, 'getStudents']);
Route::post('/accept_student', [AdminController::class, 'accept']);
Route::post('/reject_student', [AdminController::class, 'reject']);

Route::post('/accept_developer', [AdminController::class, 'acceptDeveloper']);
Route::post('/reject_developer', [AdminController::class, 'rejectDeveloper']);
// Route::post('/edit', [AdminController::class, 'edit']);


//developer page
Route::get('/developer_register',[MemberController::class,'developer_register'])->name('developer_register');
Route::post('/add-developer',[MemberController::class,'add_developer'])->name('add-developer');
Route::get('/developers-list',[MemberController::class,'developer_list'])->name('member-list');


//student page
Route::get('/students',[StudentController::class,'show_student']);
Route::get('student',[StudentController::class,'student_register'])->name('student');
Route::post('/add_student',[StudentController::class,'store_student'])->name('/add_student');
Route::get('/student/fetch-students',[StudentController::class,'fetchstudent']);


//project 
// Route::get('/project_register',[ProjectController::class,'project_register']);