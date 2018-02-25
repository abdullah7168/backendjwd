<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use Illuminate\Support\Facades\DB;
use App\Courceresult;
use App\Cource;
use App\Result;
class ResultController extends Controller
{
    public function allResults(){
        $departments = Department::all();
        $results = DB::table('results')
                    ->join('students', 'results.student_id', '=', 'students.id')
                    ->select('results.*', 'students.name')
                    ->get();
        return view ('dashboard-results',compact('results','departments'));
    }

    public function announceResultView(){
        return view('dashboard-announce-result');
    }

    public function announceResult(){
        $courceresults = Courceresult::all();
        $arrayofcources = $courceresults->toArray();
        $arrayofcources = array_chunk($arrayofcources,2);
        $gpa_of_this_semester = 0;
        $semesters = array(1,2,3,4,5,6,7,8);
        $array_of_prev_gpa = array();


        
        foreach ($arrayofcources as $key => $value) {
            
            //semester level
            $sum_of_cource_gpa = 0;
            $total_credit_hours = 0;
            $cource_codes = array();

            foreach ($value as $k => $v) {
                // cource level
                
                //get cource credit hours
                // calc gpa
                $credit_hours = $this->getCreditHours($v['cource_id']);
                $sum_of_cource_gpa += $v['gpa'] * $credit_hours;
               
                $total_credit_hours += $credit_hours;
                if($k == 1){
                    $gpa_of_this_semester = $sum_of_cource_gpa / $total_credit_hours;
                }

                $cource_codes[] = $v['cource_id'];
            }

            $array_of_prev_gpa[] = $gpa_of_this_semester;
            $_cgpa = $gpa_of_this_semester;
           
            if($semesters[$key] > 1){
                $last_sem = $key-1;
                $gpa_of_last_sem = $array_of_prev_gpa[$last_sem];

                $dot_of_gpa_nd_last_sem = $gpa_of_last_sem * $last_sem;
                $sum = $dot_of_gpa_nd_last_sem + $array_of_prev_gpa[$last_sem];
                $_cgpa = $sum / $semesters[$key];

                $result = new Result();
                $result->cource_codes = serialize($cource_codes);
                $result->semester = $semesters[$key];
                $result->cgpa = $_cgpa;
                $result->student_id = '1';
                $result->section = 'A';
                $result->pass_marks = '0';
                $result->obt_marks = '0';
                $result->type  = 'regular';
                $result->shift  = '1';
                $result->save();
            }

        }

    }

    public function getCreditHours($code){
        $cource = Cource::where('code','=',$code)->first();
        $cource = $cource->toArray();
        return $cource['credit_hours'];
    }


    
}
