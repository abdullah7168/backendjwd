<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Enrollment;
use App\Dgvreqs;



class StudentController extends Controller
{
    public function index(){

    }
    public function apiLogin(Request $request){

        $student = DB::table('students')->where('username', $request->misid)->first();
        if(!empty($student)){
            if(Hash::check($request->password,$student->password)){
                return response()->json(array(
                    'status_code ' => 1,
                    'request' => $request,
                    'student' => $student
                ));
            }
            return response()->json(array(
                'status_code ' => 0,
                'request' => $request,
                'responce' => 'incorrect password'
            ));
        }
        return response()->json(array(
            'status_code ' => 0,
            'request' => $request,
            'responce' => 'No user with this id'
        ));
    }

    public function registerStudentView(){
        return view('dashboard-student-register');
    }
    public function registerStudent(Request $request){
        $student = new Student;
        $student->name = $request->student_name;
        $student->fathername = $request->student_fathername;
        $student->cnic = $request->student_cnic;
        $student->dob = $request->student_dob;
        $student->email = $request->student_email;
        $student->age = $request->student_age;
        $student->gender = $request->student_gender;
        $student->username = $request->student_misid;
        $student->password = bcrypt($request->student_password);
        $student->address = 'abc street';
        $student->save();
        return redirect::to('/');
    }




    /**
     * Api Request for
     * Degree Varification of
     * a Student, Request will be stored
     * and made available to the admin
     * as a notification
     */

     public function initiateRequest(Request $request){

        $verification_request = new Dgvreqs;
        $verification_request->student_id = $request->student_id;
        $verification_request->request_status = 'pending';
        $verification_request->notes = '';
        $verification_request->save();

        return response()->json(array(
            'status_code ' => 1,
            'request' => $request,
            'message' => 'your request is successfully recieved and will be process shortly'
        ));

     }
}
