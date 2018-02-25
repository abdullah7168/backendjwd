<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrollment;
class EnrollmentController extends Controller
{
    public function allEnrollments(){

    }
    public function registerEnrollmentView(){
        $enrollments = Enrollment::all();
        return view('dashboard-enrollments',compact('enrollments'));
    }
    public function editEnrollment($id,Request $request){
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->fee_status = $request->fee_status;
        $enrollment->update();
        return redirect('enrollments');
    }
    public function registerEnrollment(){

    }
}
