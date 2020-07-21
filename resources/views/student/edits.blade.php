@extends('layouts.master')
@section("title","Add Student")

@section('data')

<div class="col-lg-12">
    <div class="card">
        <center><div class="card-header" style="background-color: #4f4fd2;border-radius: 33px;width: 761px;height: 43px;margin-top: 12px;">
            <h3 style="margin-top: -8px"><center><span style="color: white;">Edit Students Data</span></center></h3>
        </div></center>
        <div class="card-body card-block" style="margin-left: 3%;margin-right: 3%">
            <form action="{{url('/student/update')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">

               
                @if(session('message'))
                <p class="alert alert-success">
                    {{session('message')}}
                </p>
                @endif

                {{csrf_field()}}
                <div class="row form-group">
                    <input type="hidden" name="id" value="{{$student->id}}">
                    <input type="hidden" name="suser_id" value="{{$student->suser_id}}">
                    <div class="col-8">
                        <div class="col-md-3"><label for="name" placeholder="Enter name" class=" form-control-label">Student name</label></div>
                        <input type="text" id="company" placeholder="Enter student name" class="form-control" name="sname" value="{{$student->sname}}">
                    </div>
                
                    <div class="col-8">
                        <div class="form-group"><label for="fname" class=" form-control-label">Father Name</label><input type="text" id="fname" placeholder="Enter Father name" class="form-control" name="fname" value="{{$student->fname}}"></div>
                     </div>

                     <div class="col-8">
                        <div class="form-group"><label for="dob" class=" form-control-label">Date of Birth</label><input type="Date" id="dob" placeholder="Enter DOB" class="form-control" name="dob" value="{{$student->dob}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="course" class=" form-control-label">Course</label><input type="text" id="course" placeholder="Enter course" class="form-control" name="course" value="{{$student->course}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="contactnumber" class=" form-control-label">Contact Number</label><input type="text" id="contactnumber" placeholder="Enter contact number" class="form-control" name="contactnumber" value="{{$student->contactnumber}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="email" id="email" placeholder="Enter Email" class="form-control" name="email" value="{{$student->email}}"></div>
                    </div>

                     <input type="hidden" name="name" value="{{Auth::user()->name}}">


                    <div class="col-8">
                        <div class="form-group"><label for="password" class=" form-control-label">Password</label><input type="password" id="password" placeholder="Enter Password" class="form-control" name="password" value="{{$student->password}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="coursefee" class=" form-control-label">Enter course fees</label><input type="text" id="coursefee" placeholder="Enter course fees" class="form-control" name="coursefee" value="{{$student->coursefee}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="submittedfee" class=" form-control-label">Submitted Fees</label><input type="text" id="submittedfee" placeholder="Enter Submitted Fees" class="form-control" name="submittedfee" value="{{$student->submittedfee}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="Payment Remark" class=" form-control-label">Payment Remark</label><input type="text" id="paymentremark" placeholder="Enter Payment Remark" class="form-control" name="paymentremark" value="{{$student->paymentremark}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="Payment Method" class=" form-control-label">Payment Method</label><input type="text" id="paymentmethod" placeholder="Enter Payment Method" class="form-control" name="paymentmethod" value="{{$student->paymentmethod}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="registration" class=" form-control-label">Registration Date</label><input type="Date" id="registration" placeholder="Enter Registration Date" class="form-control" name="registration" value="{{$student->registration}}"></div>
                    </div>

                    <div class="col-8">
                        <div><label for="image" class=" form-control-label">Image</label><img src="{{url('/upload/'.$student->image)}}" style="height: 150px;width: 150px"><input type="file" id="image" name="image" value="{{asset($student->image)}}"></div>
                    </div>                    
                    
                </div>
                
                    <button type="submit" class="btn btn-primary btn-sm">
                         Update
                    </button>                
        </div>
    </div>
</div>

@endsection