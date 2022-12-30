<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function show()
    {
        $lessons= DB::table('lessons')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('teachers', 'teachers.ID', '=', 'subjects.TeacherID')
        ->select('*')
        ->where('teachers.LoginID', Auth::id())
        ->get();

        return view('teacher_students', compact('lessons'));
    }

    public function showL(Request $request)
    {
        $students= DB::table('students')
        ->join('classes', 'classes.ID', '=', 'students.ClassID')
        ->join('lessons', 'classes.ID', '=', 'lessons.ClassID')
        ->select('*')
        ->where('lessons.ID', request("lesson"))
        ->get();

        return view('teacher_students_list', compact('students'));
    }

    public function createG()
    {
        return view("teacher_studentlist.createG");
    }

    public function createD()
    {
        return view("teacher_studentlist.createD");
    }
}
