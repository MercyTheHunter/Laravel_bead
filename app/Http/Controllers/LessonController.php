<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function showT()
    {
        $lesson = DB::table('lessons')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('teachers', 'teachers.ID', '=', 'subjects.TeacherID')
        ->join('users', 'users.ID', '=', 'teachers.LoginID')
        ->select('*')
        ->where('LoginID', Auth::id())
        ->get();
        return view('teacher_timetable', compact('lesson'));
    }

    public function showS()
    {
        $lesson = DB::table('lessons')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('classes', 'classes.ID', '=', 'lessons.ClassID')
        ->join('students', 'students.classID', '=', 'classes.ID')
        ->join('users', 'users.ID', '=', 'students.LoginID')
        ->select('*')
        ->where('LoginID', Auth::id())
        ->get();
        return view('student_timetable', compact('lesson'));
    }
}
