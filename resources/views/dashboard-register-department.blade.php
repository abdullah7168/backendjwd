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
                        <h3>Register new Department</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2" style="padding:40px 0;">
                    <form action="{{url('department/register')}}" method="POST">
                        {{csrf_field()}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="dpt_title" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tution Fee</label>
                                <input type="text" name="tution_fee" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Total Semesters</label>
                                <input type="number" max="8" min="1" name="semesters" value="" class="form-control">
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