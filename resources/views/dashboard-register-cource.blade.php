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
                        <h3>Register new Cource</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2" style="padding:40px 0;">
                    <form action="{{url('cource/register')}}" method="POST">
                        {{csrf_field()}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Code</label>
                                <input type="text" name="code" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Credit Hours</label>
                                <input type="tel" max="4" min="3" name="credit_hours" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Fee</label>
                                <input type="text"  name="fee" value="" class="form-control">
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