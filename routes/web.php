<?php

use App\Http\Controllers\ProfileController;
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
    return view('student_dashboard');
})->middleware(['auth', 'verified', 'student'])->name('dashboard');

Route::get('/parent-dashboard', function () {
    return view('parent_dashboard');
})->middleware(['auth', 'verified', 'parent'])->name('parent_dashboard');

Route::get('/teacher-dashboard', function () {
    return view('teacher_dashboard');
})->middleware(['auth', 'verified', 'teacher'])->name('teacher_dashboard');

//Teacher things
Route::group(['middleware' => ['auth', 'verified', 'teacher']], function () {
    Route::get('/teacher-timetable', [App\Http\Controllers\LessonController::class, 'showT'])->name('teacher_timetable');
});

//Student things
Route::group(['middleware' => ['auth', 'verified', 'student']], function () {
    Route::get('/timetable', [App\Http\Controllers\LessonController::class, 'showS'])->name('timetable');
    Route::get('/delays', [App\Http\Controllers\DelayController::class, 'showS'])->name('delays');
    Route::get('/grades', [App\Http\Controllers\GradeController::class, 'showS'])->name('grades');
    Route::post('/student_grades/table', [App\Http\Controllers\GradeController::class, 'showSG'])->name('student_grades_table');
});

//Parent things
Route::group(['middleware' => ['auth', 'verified', 'parent']], function () {
    Route::get('/parent_timetable', [App\Http\Controllers\LessonController::class, 'showP'])->name('parent_timetable');
    Route::post('/parent_timetable/table', [App\Http\Controllers\LessonController::class, 'showPS'])->name('parent_timetable_table');
    Route::get('/parent_delays', [App\Http\Controllers\DelayController::class, 'showP'])->name('parent_delays');
    Route::post('/parent_delays/table', [App\Http\Controllers\DelayController::class, 'showPS'])->name('parent_delays_table');
});

Route::get('/teacher_delays', function () {
    return view('teacher_delays');
})->middleware(['auth', 'verified', 'teacher'])->name('teacher_delays');

Route::get('/parent-grades', function () {
    return view('parent_grades');
})->middleware(['auth', 'verified', 'parent'])->name('parent_grades');

Route::get('/teacher_grades', function () {
    return view('teacher_grades');
})->middleware(['auth', 'verified', 'teacher'])->name('teacher_grades');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dbtest', function () {
    return dd(DB::select("select * from users"));
});

require __DIR__.'/auth.php';
