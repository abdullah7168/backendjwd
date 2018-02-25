<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cource;
use App\Teacher;
use App\Student;
use App\Courceresult;
class CourceresultController extends Controller
{
    public function allResults(){
        // show all cource results
    }

    public function announceResultView(){
        $cources = Cource::all();
        $teachers = Teacher::all();
        $students = Student::all();
        return view('dashboard-announce-cource-result',compact('cources','teachers','students'));
    }

    public function announceResult(Request $request){

        $courceresult = new Courceresult;
        $courceresult->cource_id    = $request->cource_id;
        $courceresult->teacher_id = '1';
        $courceresult->student_id = $request->student_id;
        $courceresult->total_marks = $request->total_marks;
        $courceresult->obt_marks = $request->obt_marks;
        $courceresult->gpa = $request->gpa;
        $courceresult->grade = $request->grade;
        $courceresult->save();

        return redirect('cource-results');
    }


}
