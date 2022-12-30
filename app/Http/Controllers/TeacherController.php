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
        $students= DB::table('students')
        ->join('classes', 'classes.ID', '=', 'students.ClassID')
        ->join('lessons', 'classes.ID', '=', 'lessons.ClassID')
        ->select('*')
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
        $s = new Grade();
        $s->Idopont = Carbon::now();
        $s->StudentID = 1; //request('');
        $s->Jegy = request('grade');
        $s->LessonID = 1; //request('');
        $s->save();
        return view('teacher_dashboard');
    }

    public function storeD(Request $request)
    {
        $s = new Delay();
        $s->StudentID = 1;
        $s->LessonID = 1;
        $s->Mennyiseg = request('delay');
        $s->Datum = Carbon::now();
        $s->save();
        return view('teacher_dashboard');
    }
}
