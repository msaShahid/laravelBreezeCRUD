<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(App\Http\Controllers\StudentController::class)->group(function () {

    // url for create student 
    Route::get('/add-student', 'create');

    // url for get from data and save it in database
    Route::post('/add-student','store');

    // student table
    Route::get('/student-details','studentDetails');

    // edit student Details
    Route::get('/edit-student/{student_id}', 'edit');

    // Update Student Details
    Route::put('/update-student/{student_id}', 'update');

    // Delete Student Details
    Route::delete('/delete-student/{student_id}', 'destory');
 
});
