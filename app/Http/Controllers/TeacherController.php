<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Grade;
use App\Models\Delay;
use Carbon\Carbon;

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

        //dd($lessons);
        return view('teacher_students', compact('lessons'));
    }

    public function showL(Request $request)
    {
        $students = DB::table('students')
        ->join('classes', 'classes.ID', '=', 'students.ClassID')
        ->join('lessons', 'classes.ID', '=', 'lessons.ClassID')
        ->select('students.ID', 'students.Vnev', 'students.Knev', 'lessons.ID')
        ->where('lessons.ID', request("lesson"))
        ->get();

        $lesson = DB::table('lessons')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->select('*')
        ->where('lessons.ID', request("lesson"))
        ->get();
        return view('teacher_students_list', compact('students', 'lesson'));
    }

    public function storeG(Request $request)
    {
        $lessons= DB::table('lessons')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('teachers', 'teachers.ID', '=', 'subjects.TeacherID')
        ->select('*')
        ->where('teachers.LoginID', Auth::id())
        ->get();

        $studentid = DB::table('students')
        ->select('students.ID')
        ->where('students.Vnev', request("studentvnev"))
        ->get();

        foreach ($studentid as $s)
        {
            $temp = $s->ID;
        }

        $s = new Grade();
        $s->Idopont = Carbon::now();
        $s->StudentID = $temp;
        $s->Jegy = request('grade');
        $s->LessonID = request('lessonid');
        $s->save();
        return view('teacher_students', compact('lessons'));
    }

    public function storeD(Request $request)
    {
        $lessons= DB::table('lessons')
        ->join('subjects', 'subjects.ID', '=', 'lessons.SubjectID')
        ->join('teachers', 'teachers.ID', '=', 'subjects.TeacherID')
        ->select('*')
        ->where('teachers.LoginID', Auth::id())
        ->get();

        $studentid = DB::table('students')
        ->select('students.ID')
        ->where('students.Vnev', request("studentvnev"))
        ->get();

        foreach ($studentid as $s)
        {
            $temp = $s->ID;
        }

        $s = new Delay();
        $s->StudentID = $temp;
        $s->LessonID = request('lessonid');
        $s->Mennyiseg = request('delay');
        $s->Datum = Carbon::now();
        $s->save();
        return view('teacher_students', compact('lessons'));
    }
}
