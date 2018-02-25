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
                        <h3>Announce Result</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2" style="padding:40px 0;">
                    <form action="{{url('cource-result/announce')}}" method="POST">
                        {{csrf_field()}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Student</label>
                                <select  class="form-control" name="student_id" id="">
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}">{{$student->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Cource</label>
                                <select name="cource_id" class="form-control" id="">
                                    @foreach($cources as $cource)
                                        <option value="{{$cource->code}}">{{$cource->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Total Marks</label>
                                <input type="number" name="total_marks" value="100" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Obtained Marks</label>
                                <input type="number"  name="obt_marks" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>GPA</label>
                                <input type="text" name="gpa" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Grade</label>
                                <input type="text"  name="grade" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function calculateGpa(obt_marks){
            var gpainput = $('input[name="gpa"]');
            var gradeinput = $('input[name="grade"]');
            var gpa = 0;
            var grade = 'F';

            if(obt_marks < 50){
                gpa = 0;
                grade = 'F';
            } else if(obt_marks >= 50 && obt_marks < 55){
                gpa = 1.5;
                grade = 'D';
            } else if(obt_marks >= 55 && obt_marks < 65){
                gpa = 2.0;
                grade = 'C';
            } else if(obt_marks >= 65 && obt_marks < 70){
                gpa = 2.5;
                grade = 'C+';
            } else if(obt_marks >= 70 && obt_marks < 75){
                gpa = 3.0;
                grade = 'B';
            } else if(obt_marks >= 75 && obt_marks < 80) {
                gpa = 3.5;
                grade = 'B+';
            } else if(obt_marks >= 80 && obt_marks <=100 ){
                gpa = 4.0;
                grade = 'A';
            } else {
                
            }
            
            gpainput.val(gpa);
            gradeinput.val(grade);

        }


        $(document).ready(function(){
            $('input[name="obt_marks"]').on('keyup',function(){
                let obt_marks = 0;
                obt_marks = $(this).val();
                console.log(obt_marks);
                if(obt_marks != 0){
                    calculateGpa(obt_marks);
                }
            }); 
        })
    </script>
@endsection