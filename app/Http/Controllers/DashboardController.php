<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showS()
    {
        return view('student_dashboard');
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
