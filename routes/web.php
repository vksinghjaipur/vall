<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VikashTestController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/",[VikashTestController::class, 'index']); 

Route::get("/salary",[VikashTestController::class, 'salaryGet'])->name('salary'); 


Route::get("/student/list",[StudentController::class,"index"])->name('student.index');
Route::get("/student/add",[StudentController::class,"create"])->name('student.create');
Route::post("/student/add",[StudentController::class,"store"]);
Route::get("/student/edit/{id}",[StudentController::class,"edit"])->name('student.edit');
Route::PUT("/student/edit/{id}",[StudentController::class,"update"]);
