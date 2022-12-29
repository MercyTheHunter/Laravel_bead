<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function store(Request $request)
    {
        $g = new Grades();
        $g->Idopont = //Current time;;
        $g->StudentID = //Student;
        $g->SubjectID = request("subjectID");
        $g->Jegy = request("Jegy");
        $g->save();
    }
}
