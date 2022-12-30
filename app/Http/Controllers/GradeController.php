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
        ->select('Idopont', 'Jegy', 'subjects.ID')
        ->where('students.LoginID', Auth::id())
        ->where('subjects.Nev', request("subject"))
        ->get();

        $avg= DB::table('grades')
        ->join('lessons', 'lessons.ID', '=', 'grades.LessonID')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('students', 'students.ID', '=', 'grades.StudentID')
        ->select('Idopont', 'Jegy', 'subjects.ID')
        ->where('students.LoginID', Auth::id())
        ->where('subjects.Nev', request("subject"))
        ->avg('Jegy');

        return view('student_grades_table', compact('grades', 'avg'));
    }

    public function showP()
    {
        $student = DB::table('students')->select('students.Vnev', 'students.Knev', 'students.ID')
        ->join('parentstudents', 'students.ID', '=', 'parentstudents.StudentID')
        ->join('parents', 'parents.ID', '=', 'parentstudents.ParentID')
        ->where('parents.LoginID', Auth::id())
        ->get();

        return view('parent_grades', compact('student'));
    }

    public function showPSub(Request $request)
    {
        $subjects = DB::table('subjects')
        ->join('lessons', 'lessons.SubjectID', '=', 'subjects.ID')
        ->join('classes', 'lessons.ClassID', '=', 'classes.ID')
        ->join('students', 'students.ClassID', '=', 'classes.ID')
        ->select('subjects.Nev', 'students.ID')
        ->groupBy('subjects.Nev', 'students.ID')
        ->having('students.ID', request("studentname"))
        ->get();

        $student = request("studentname");

        return view('parent_grades_subject', compact('subjects', 'student'));
    }

    public function showPGrad(Request $request)
    {
        $grades= DB::table('grades')
        ->join('lessons', 'lessons.ID', '=', 'grades.LessonID')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('students', 'students.ID', '=', 'grades.StudentID')
        ->select('Idopont', 'Jegy', 'subjects.ID')
        ->where('students.ID', request("studentname"))
        ->where('subjects.Nev', request("subject"))
        ->get();

        $avg= DB::table('grades')
        ->join('lessons', 'lessons.ID', '=', 'grades.LessonID')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('students', 'students.ID', '=', 'grades.StudentID')
        ->select('Idopont', 'Jegy', 'subjects.ID')
        ->where('students.ID', request("studentname"))
        ->where('subjects.Nev', request("subject"))
        ->avg('Jegy');

        return view('parent_grades_table', compact('grades', 'avg'));
    }
}
