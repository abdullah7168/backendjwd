@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="box box-primary">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="box-header">
                        <h3>Results</h3>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-sm-8 col-sm-offset-2" style="margin-bottom:40px;">
                        <div class="col-sm-3">
                            <label>Department</label>
                            <select class="form-control" name="dpt_abbr">
                                @foreach ($departments as $department)
                                    <option value="{{$department->dpt_abbr}}">{{$department->dpt_abbr}}</option>
                                @endforeach
                            </select>
                        </div>   
                        <div class="col-sm-3">
                            <label>Semester</label>
                            <select class="form-control" name="semester">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Section</label>
                            <select class="form-control" name="section">
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Shift</label>
                            <select class="form-control"name="shift">
                                <option value="1">Morning</option>
                                <option value="0">Evening</option>
                            </select>
                        </div>
                        <div class="col-sm-3" style="margin-top:20px;">
                            <button id="btn-filter-result" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    <hr style="color:#d9d9d9;border-bottom:1px solid #d9d9d9;width:100%;">
                    <div class="col-sm-8 col-sm-offset-2 dynamic-table">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Student Name</td>
                                    <td>CGPA</td>
                                    <td>Semester</td>
                                    <td>Section</td>
                                    <td>Type</td>
                                    <td>Shift</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($results as $result)
                                        <td><a href="{{url('/result/student/'.$result->student_id)}}">{{$result->name}}</a></td>
                                        <td>{{$result->cgpa}}</td>
                                        <td>{{$result->semester}}</td>
                                        <td>{{$result->section}}</td>
                                        <td>{{$result->type}}</td>
                                        <td>{{$result->shift}}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection