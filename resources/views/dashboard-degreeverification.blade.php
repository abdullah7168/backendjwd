@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="container">
                      <div class="row">
                            <div class="col-sm-4">
                                <p><label>Student Name:</label> Jawad Ahmed</p>
                                <p><label>Father Name:</label> Ahmed</p>
                                <hr style="border-bottom:1px solid #fff;">
                                <p><label>Shift:</label> Morning</p>
                                <p><label>Degree:</label> BS</p>
                                <p><label>Program:</label> CS</p>
                            </div> 
                      </div>
                  </div>
                </div>
                <div class="pabel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <h3>Fee Status</h3>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge badge-success">clear</span>
                                        Semester 1
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-success">clear</span>
                                        Semester 2
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-success">clear</span>
                                        Semester 3
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-warning">defaulter</span>
                                        Semester 4
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-primary">clear</span>
                                        Semester 5
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <h3>Semester Status</h3>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge badge-success">clear</span>
                                        Semester 1
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-success">clear</span>
                                        Semester 2
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-success">clear</span>
                                        Semester 3
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-warning">defaulter</span>
                                        Semester 4
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-primary">clear</span>
                                        Semester 5
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <h3>Library Status</h3>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge badge-success">clear</span>
                                        Library Record
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <h3>Cafe Status</h3>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge badge-success">clear</span>
                                        Cafe Record
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Verify</button>
                                <button class="btn btn-danger">Defaulter</button>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection