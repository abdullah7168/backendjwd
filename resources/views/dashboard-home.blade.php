@extends('layouts.master')

@section('content')
    <style>
        .--table-container{
            background:#fff;
        }
    </style>
    <div class="contianer">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="col-sm-8 col-sm-offset-2">
                    <h3>Recieved Degree Verification Requests</h3>
                </div>
            </div>
            <div class="box-body">
                <div class="col-sm-8 col-sm-offset-2">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Request No</th>
                                <th>Student</th>
                                <th>Request Status</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($vrfrequests as $req)
                                    <td>{{$req->id}}</td>
                                    <td>{{$req->name}}</td>
                                    <td>{{$req->request_status}}</td>
                                    <td>{{$req->notes}}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection