<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('student', [HomeController::class, 'index'])->name('student.index');
// Route::get('save-student', [HomeController::class, 'save']);
Route::get('student/add', [HomeController::class, 'addForm'])->name('students.add');
Route::post('student/add', [HomeController::class, 'saveAdd'])->name('students.saveAdd');

Route::get('student/edit/{id}', [HomeController::class, 'editForm'])->name('students.edit');
Route::post('student/edit/{id}', [HomeController::class, 'saveEdit'])->name('students.saveEdit');

Route::get('/remove/{id}', [HomeController::class, 'remove'])->name('students.remove');
Route::get('student/list20', [HomeController::class, 'listForm'])->name('students.list20');
