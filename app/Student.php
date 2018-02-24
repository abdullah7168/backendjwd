<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 
        'fathername', 
        'dob',
        'age',
        'gender',
        'cnic',
        'email',
        'misid',
        'password'
    ];
}
