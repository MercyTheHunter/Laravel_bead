<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    public function show($subject)
    {
        $lesson = DB::table('lessons')->select('subjectID')->where('SubjectID', $subject)->get();
        return view('teacher_timetable', compact('lesson'));
    }
}
