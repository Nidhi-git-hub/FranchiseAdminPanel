@extends('layouts.master')
@section("title","view")

        @section('data')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <center><div class="card-header" style="background-color: #4f4fd2;border-radius: 33px; width: 761px;height: 43px;margin-top: 12px;">
                        <h3 style="margin-top: -8px"><center><span style="color: white;">All Student Data</span></center></h3></div></center>
                    </div>

                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Father's Name</th>
                                    <th>Date of Birth</th>
                                    <th>Course</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Course Fees</th>
                                    <th>Submitted Fees</th>
                                    <th>Payment Remark</th>
                                    <th>Payment Method</th>
                                    <th>Registration</th>
                                    <th>Reg. Number</th>
                                    <th>Franchise Name</th>
                                    <th>Image</th>                                  
                                </tr>
                            
                            <tbody>
                                    <tr>
                                        <td>{{$student->sname}}</td>
                                        <td>{{$student->fname}}</td>
                                        <td>{{$student->dob}}</td>
                                        <td>{{$student->course}}</td>
                                        <td>{{$student->contactnumber}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->password}}</td>
                                        <td>{{$student->coursefee}}</td>
                                        <td>{{$student->submittedfee}}</td>
                                        <td>{{$student->paymentremark}}</td>
                                        <td>{{$student->paymentmethod}}</td>
                                        <td>{{$student->registration}}</td>
                                        <td>{{$student->regno}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>@php if (!empty($student->image))
                                            {
                                            @endphp
                                            <img src="{{url('/upload/'.$student->image)}}" style="height: 150px; width: 150px" >
                                            @php 
                                            } else {
                                            @endphp 
                                            <p>No image found</p>
                                            @php
                                            }
                                            @endphp
            
                                        </td>
                                    </tr>                                        
                            </tbody>
                        </thead>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection