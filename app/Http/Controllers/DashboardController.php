<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showS()
    {
        $student = DB::table('students')
        ->join('classes', 'classes.ID', '=', 'students.ClassID')
        ->join('users', 'users.ID', '=', 'students.LoginID')
        ->where('students.LoginID', Auth::id())
        ->get();

        return view('student_dashboard', compact('student'));
    }

    public function showP()
    {
        $children = DB::table('students')
        ->join('classes', 'classes.ID', '=', 'students.ClassID')
        ->join('parentstudents', 'students.ID', '=', 'parentstudents.StudentID')
        ->join('parents', 'parents.ID', '=', 'parentstudents.ParentID')
        ->join('users', 'users.ID', '=', 'parents.LoginID')
        ->where('parents.LoginID', Auth::id())
        ->get();

        $parent = DB::table('parents')
        ->join('users', 'users.ID', '=', 'parents.LoginID')
        ->where('parents.LoginID', Auth::id())
        ->get();

        return view('parent_dashboard', compact('children', 'parent'));
    }

    public function showT()
    {
        $teacher = DB::table('teachers')
        ->join('users', 'users.ID', '=', 'teachers.LoginID')
        ->where('teachers.LoginID', Auth::id())
        ->get();

        return view('teacher_dashboard', compact('teacher'));
    }
}
