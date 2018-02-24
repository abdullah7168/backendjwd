<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourceController extends Controller
{
    public function allCources(){
        // return some view
    }

    public function registerCourceView(){
        return view('dashboard-register-cource');
    }

    public function registerCource(){
        // cource registration login goes here.
    }
}
