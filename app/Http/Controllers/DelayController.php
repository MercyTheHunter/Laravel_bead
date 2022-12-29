<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DelayController extends Controller
{
    public function show()
    {
        $delay = DB::table('delays')
        ->join('lessons', 'lessons.ID', '=', 'delays.LessonID')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('students', 'students.ID', '=', 'delays.StudentID')
        ->join('users', 'users.ID', '=', 'students.LoginID')
        ->select('*')
        ->where('LoginID', Auth::id())
        ->get();

        $sum = DB::table('delays')
        ->join('lessons', 'lessons.ID', '=', 'delays.LessonID')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('students', 'students.ID', '=', 'delays.StudentID')
        ->where('LoginID', Auth::id())
        ->sum('Mennyiseg');

        return view('student_delays', compact('delay', 'sum'));
    }
}
