<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function allDepartments(){
        // return view with all departments
    }

    public function registerDepartmentView(){
        return view('dashboard-register-department');
    }

    public function registerDepartment(){
        // register department logic goes here
    }
}
