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
        return view('parent_dashboard');
    }

    public function showT()
    {
        return view('teacher_dashboard');
    }
}
