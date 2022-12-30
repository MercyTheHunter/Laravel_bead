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

//Teacher things
Route::group(['middleware' => ['auth', 'verified', 'teacher']], function () {
    Route::get('/teacher_dashboard', [App\Http\Controllers\DashboardController::class, 'showT'])->name('teacher_dashboard');
    Route::get('/teacher_timetable', [App\Http\Controllers\LessonController::class, 'showT'])->name('teacher_timetable');
    Route::get('/teacher_students', [App\Http\Controllers\TeacherController::class, 'show'])->name('teacher_students');
    Route::get('/teacher_students/give_grade', [App\Http\Controllers\TeacherController::class, 'createG'])->name('teacher_studentslist.createG');
    Route::get('/teacher_students/give_delay', [App\Http\Controllers\TeacherController::class, 'createD'])->name('teacher_studentslist.createD');
    Route::post('/teacher_students/list', [App\Http\Controllers\TeacherController::class, 'showL'])->name('teacher_students_list');
    Route::post('/teacher_students/store_grade', [App\Http\Controllers\GradeController::class, 'storeG'])->name('grade_save');
    Route::post('/teacher_students/store_delay', [App\Http\Controllers\DelayController::class, 'storeD'])->name('delay_save');
});

//Student things
Route::group(['middleware' => ['auth', 'verified', 'student']], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'showS'])->name('dashboard');
    Route::get('/timetable', [App\Http\Controllers\LessonController::class, 'showS'])->name('timetable');
    Route::get('/delays', [App\Http\Controllers\DelayController::class, 'showS'])->name('delays');
    Route::get('/grades', [App\Http\Controllers\GradeController::class, 'showS'])->name('grades');
    Route::post('/student_grades/table', [App\Http\Controllers\GradeController::class, 'showSG'])->name('student_grades_table');
});

//Parent things
Route::group(['middleware' => ['auth', 'verified', 'parent']], function () {
    Route::get('/parent_dashboard', [App\Http\Controllers\DashboardController::class, 'showP'])->name('parent_dashboard');
    Route::get('/parent_timetable', [App\Http\Controllers\LessonController::class, 'showP'])->name('parent_timetable');
    Route::post('/parent_timetable/table', [App\Http\Controllers\LessonController::class, 'showPS'])->name('parent_timetable_table');
    Route::get('/parent_delays', [App\Http\Controllers\DelayController::class, 'showP'])->name('parent_delays');
    Route::post('/parent_delays/table', [App\Http\Controllers\DelayController::class, 'showPS'])->name('parent_delays_table');
    Route::get('/parent_grades', [App\Http\Controllers\GradeController::class, 'showP'])->name('parent_grades');
    Route::post('/parent_grades/subject', [App\Http\Controllers\GradeController::class, 'showPSub'])->name('parent_grades_subject');
    Route::post('/parent_grades/table', [App\Http\Controllers\GradeController::class, 'showPGrad'])->name('parent_grades_table');
});

Route::get('/teacher_delays', function () {
    return view('teacher_delays');
})->middleware(['auth', 'verified', 'teacher'])->name('teacher_delays');

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
