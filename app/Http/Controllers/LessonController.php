<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    public function show()
    {
        $lesson = DB::table('lessons')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('teachers', 'teachers.ID', '=', 'subjects.TeacherID')
        ->join('users', 'users.ID', '=', 'teachers.LoginID')
        ->select('*')
        ->where('TeacherID', 8)
        ->get();
        return view('teacher_timetable', compact('lesson'));

        /*
        $lesson = DB::table('lessons')
                ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
                ->join('teachers', 'teacher.ID', '=', 'subjects.TeacherID')
                ->join('users', 'users.ID', '=', 'teachers.LoginID')
                ->select('*')
                ->where('teachers.LoginID', 2);
        return view('teacher_timetable', compact('lesson'));
        */
    }
}
