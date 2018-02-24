@extends('layouts.master')

@section('content')
    <style>
        .form-group{
            margin-bottom:20px;
        }
    </style>
    <div class="container">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h3>Registration Form</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2" style="padding:40px 0;">
                    <form action="{{url('student/register')}}" method="POST">
                        {{csrf_field()}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="student_name" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Father Name</label>
                                <input type="text" name="student_fathername" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">CNIC</label>
                                <input type="tel" max="13" name="student_cnic" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"  name="student_email" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" name="student_dob" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="number" name="student_age" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="student_gender" class="form-control" id="">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="tel" class="form-control" name="student_phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="student_address">
                            </div>
                        </div>
                        <hr style="color:#333;border-bottom:1px solid #333;diplay:block;width:100%;">
                        <!-- breaker for regular info -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>MIS ID</label>
                                <input type="text" name="student_misid" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="student_password" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection