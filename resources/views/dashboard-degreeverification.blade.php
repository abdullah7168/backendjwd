@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="container">
                      <div class="row">
                            <div class="col-sm-4">
                                <p><label>Student Name:</label> {{$student->name}}</p>
                                <p><label>Father Name:</label> {{$student->fathername}}</p>
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
                                    @foreach ($enrollments as $enrollment)
                                        <li class="list-group-item">
                                            @if ($enrollment->fee_status == 'pending')
                                                <span class="badge badge-warning">pending</span>                                                                                            
                                            @else
                                                <span class="badge badge-success">clear</span>                                                
                                            @endif
                                            Semester - {{$enrollment->semester}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <h3>Semester Status</h3>
                                <ul class="list-group">
                                    @foreach ($results as $result)
                                    <li class="list-group-item">
                                        
                                        @if ($result->cgpa < 1.5)
                                            <span class="badge badge-danger">Fail</span>
                                        @else
                                            <span class="badge badge-success">clear</span>                                        
                                        @endif
                                        Semester {{$result->semester}}
                                    </li>
                                    @endforeach
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
                    <form action="{{url('process/request')}}" method="POST">
                        {{csrf_field()}}
                        <div class="container">
                            <div class="row" style="margin-bottom:20px;">
                                <div class="col-sm-4">
                                    <label>Add Notes</label>
                                    <textarea name="notes" id="" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="col-sm-4">
                                    <label>Status</label>
                                    <select class="form-control" name="request_status">
                                        <option value="verified">Verify</option>
                                        <option value="pending">Incomplete Request</option>
                                    </select>
                                </div>
                                <input type="hidden" name="student_id" value="{{$student->id}}">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection