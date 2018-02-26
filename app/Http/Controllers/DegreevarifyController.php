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
        $verification_request->seen = 1;
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

    public function ReqWatcher(){
        $vrfrequests = Dgvreqs::where('seen','=',0)->first();
        return response()->json(array(
            'notify' => $vrfrequests
        ));
    }

    public function ReplyWatcher(Request $request){
        $reply = Dgvreqs::where([
                            ['student_id', '=', $request->student_id],
                            ['seen', '=', '1']
                        ])->first();
        $status = 0;

        if($reply->replied != 1)
            $status = 1;
        return response()->json(array(
            'status' => $status,
            'notify' => $reply,
        ));
    }

    public function getReply(Request $request){
        $reply = Dgvreqs::findOrFail($request->id)->first();
        return response()->json(array(
            'notify' => $reply,
        ));
    }

    public function editReply(Request $request){
        $notify = Dgvreqs::findOrFail($request->id)->first();
        $notify->replied = '1';
        return response()->json(array(
            'message' => 'notification altered',
        ));
    }
}
