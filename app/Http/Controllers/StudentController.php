<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function index(){

    }
    public function apiLogin(Request $request){

        $student = DB::table('students')->where('username', $request->misid)->first();
        
        if(!empty($student)){
            if($student->password == '$2y$10$8KcIURFEYtGB82rLMWWW5OBd8lV7tiEH5A8JBEKhfVhJVnt9e1dPS'){
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
            'responce' => 'incorrect username and password'
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
}
