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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/timetable', function () {
    return view('timetable');
})->middleware(['auth', 'verified'])->name('timetable');

Route::get('/delays', function () {
    return view('delays');
})->middleware(['auth', 'verified'])->name('delays');

Route::get('/grades', function () {
    return view('grades');
})->middleware(['auth', 'verified'])->name('grades');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dbtest', function () {
    return dd(DB::select("select * from users"));
});

require __DIR__.'/auth.php';
