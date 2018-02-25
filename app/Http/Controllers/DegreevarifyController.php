<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Result;
use App\Enrollment;
use App\Dgvreqs;
use DB;


class DegreevarifyController extends Controller
{
    public function processRequest($id){
        $student = Student::findOrFail($id)->first();
        $results = Result::where('student_id','=',$id)->orderby('semester','asc')->get();
        $enrollments = Enrollment::where('student_id','=',$id)->orderby('semester','asc')->get();

        return view('dashboard-degreeverification',compact('student','results','enrollments'));
    }

    public function postRequest(Request $request){
        $verification_request = new Dgvreqs;
        $verification_request->student_id = $request->student_id;
        $verification_request->request_status = $request->request_status;
        $verification_request->notes = $request->notes;
        $verification_request->save();

        return redirect('/');
    }

    public function showAllRequests(){
        $vrfrequests = DB::table('Dgvreqs')
                    ->join('students', 'Dgvreqs.student_id', '=', 'students.id')
                    ->select('Dgvreqs.*', 'students.name')
                    ->get();
        return view('dashboard-home',compact('vrfrequests'));
    }
}
