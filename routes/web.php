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


Route::get('/timetable', function () {
    return view('student_timetable');
})->middleware(['auth', 'verified', 'student'])->name('timetable');

Route::get('/parent-timetable', function () {
    return view('parent_timetable');
})->middleware(['auth', 'verified', 'parent'])->name('parent_timetable');


Route::group(['middleware' => ['auth', 'verified', 'teacher']], function () {
    Route::get('/teacher-timetable/show', [App\Http\Controllers\LessonController::class, 'show']);
    Route::get('/teacher-timetable', function () {
        return view('teacher_timetable');
    })->name('teacher_timetable');
});

/*
Route::get('/teacher-timetable', function () {
    return view('teacher_timetable');
})->middleware(['auth', 'verified', 'teacher'])->name('teacher_timetable');
//Route::get('teacher-timetable', [App\Http\Controllers\LessonController::class, 'show']);
*/

Route::get('/delays', function () {
    return view('student_delays');
})->middleware(['auth', 'verified', 'student'])->name('delays');

Route::get('/parent-delays', function () {
    return view('parent_delays');
})->middleware(['auth', 'verified', 'parent'])->name('parent_delays');

Route::get('/teacher-delays', function () {
    return view('teacher_delays');
})->middleware(['auth', 'verified', 'teacher'])->name('teacher_delays');

Route::get('/grades', function () {
    return view('student_grades');
})->middleware(['auth', 'verified', 'student'])->name('grades');

Route::get('/parent-grades', function () {
    return view('parent_grades');
})->middleware(['auth', 'verified', 'parent'])->name('parent_grades');

Route::get('/teacher-grades', function () {
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
