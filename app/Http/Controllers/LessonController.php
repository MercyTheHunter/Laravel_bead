<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    public function show($loginid)
    {
        $lesson = DB::table('lessons')
                ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
                ->join('teachers', 'teacher.ID', '=', 'subjects.TeacherID')
                ->join('users', 'users.ID', '=', 'teachers.LoginID')
                ->select('subjects.Nev')
                ->where('teachers.LoginID', $loginid);
        return view('teacher_timetable', compact('lesson'));
    }

    public function listStudents($lessonid)
    {
        $students = DB::table('lessons')
                ->join('classes', 'classes.ID', '=', 'lessons.classID')
                ->join('students', 'classes.ID', '=', 'students.classID')
                ->select('students.Vnev', 'students.Knev')
                ->where('lessons.ID', $lessonid);
        return view('teacher_delays', compact('students'));
    }

}
