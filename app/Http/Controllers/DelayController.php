<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DelayController extends Controller
{
    public function showS()
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

    public function showP()
    {
        $student = DB::table('students')->select('students.Vnev', 'students.Knev', 'students.ID')
        ->join('parentstudents', 'students.ID', '=', 'parentstudents.StudentID')
        ->join('parents', 'parents.ID', '=', 'parentstudents.ParentID')
        ->where('parents.LoginID', Auth::id())
        ->get();

        return view('parent_delays', compact('student'));
    }

    public function showPS(Request $request)
    {
        $delay = DB::table('delays')
        ->join('lessons', 'lessons.ID', '=', 'delays.LessonID')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('students', 'students.ID', '=', 'delays.StudentID')
        ->join('users', 'users.ID', '=', 'students.LoginID')
        ->select('*')
        ->where('students.ID', request("studentname"))
        ->get();

        $sum = DB::table('delays')
        ->join('lessons', 'lessons.ID', '=', 'delays.LessonID')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('students', 'students.ID', '=', 'delays.StudentID')
        ->where('students.ID', request("studentname"))
        ->sum('Mennyiseg');

        return view('parent_delays_table', compact('delay', 'sum'));
    }

    public function storeD(Request $request)
    {
        $s = new Delays();
        $s->StudentID = request('');
        $s->LessonID = request('');
        $s->Mennyiseg = request('delay');
        $s->Datum = Carbon::now();
        $s->save();
        return view('teacher_students_list');
    }
}
