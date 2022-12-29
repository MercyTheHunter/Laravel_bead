<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
    public function showS()
    {
        $subjects = DB::table('subjects')
        ->join('lessons', 'lessons.SubjectID', '=', 'subjects.ID')
        ->join('classes', 'lessons.ClassID', '=', 'classes.ID')
        ->join('students', 'students.ClassID', '=', 'classes.ID')
        ->select('subjects.Nev', 'students.LoginID')
        ->groupBy('subjects.Nev', 'students.LoginID')
        ->having('students.LoginID', Auth::id())
        ->get();

        return view('student_grades', compact('subjects'));
    }

    public function showSG(Request $request)
    {
        $grades= DB::table('grades')
        ->join('lessons', 'lessons.ID', '=', 'grades.LessonID')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('students', 'students.ID', '=', 'grades.StudentID')
        ->select('Idopont, Jegy, subject.ID')
        ->where('students.LoginID', Auth::id())
        ->groupBy('subject.ID')
        ->get();

        return view('student_grades_table', compact('grades'));
    }
}
