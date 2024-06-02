<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;


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


Route::get('/students',[StudentController::class,'show_student']);
Route::get('student',[StudentController::class,'student_register'])->name('student');
Route::post('/add_student',[StudentController::class,'store_student'])->name('/add_student');
Route::get('/student/fetch-students',[StudentController::class,'fetchstudent']);



Route::get('/member-list',[MemberController::class,'member_list'])->name('member-list');
Route::get('/get-member/{id}', [MemberController::class, 'getMember']);
Route::post('/update-member/{id}', [MemberController::class, 'updateMember']);

Route::post('/students', [StudentController::class, 'store'])->name('students.store');

