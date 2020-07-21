@extends('layouts.master')
@section("title","display fee table")

        @section('data')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <center><div class="card-header" style="background-color: #4f4fd2;border-radius: 33px; width: 761px;height: 43px;margin-top: 12px;">
                        <h3 style="margin-top: -8px"><center><span style="color: white;">Add Fees Data</span></center></h3></div></center>
                    </div><br>
                    <center>
                    @php if (!empty($data->image))
                                            {
                                            @endphp
                                            <img src="{{url('/upload/'.$data->image)}}" style="height: 150px; width: 150px" >
                                            @php 
                                            } else {
                                            @endphp 
                                            <p>No image found</p>
                                            @php
                                            }
                                            @endphp
                                        </center>

                    <form action="{{url('myprofile')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">

                    {{csrf_field()}}

                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <td>Reg No.</td>
                                    <td>{{$data->regno}}</td>
                                </tr>
                                <tr>
                                    <td>Student Name</td>
                                    <td>{{$data->sname}}</td>
                                </tr>
                                <tr>
                                    <td>Father's Name</td>
                                    <td>{{$data->fname}}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>{{$data->dob}}</td>
                                </tr>
                                <tr>
                                    <td>Course</td>
                                    <td>{{$data->course}}</td>
                                </tr>
                                <tr>
                                    <td>Contact Number</td>
                                    <td>{{$data->contactnumber}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <td>Course Fees</td>
                                    <td>{{$data->coursefee}}</td>
                                </tr>

                                <tr>
                                    <td>Submitted Fees</td>
                                    <td>{{$data->submittedfee}}</td>
                                </tr>
                                <tr>
                                    <td>Payment Remark</td>
                                    <td>{{$data->paymentremark}}</td>
                                </tr>
                                
                                <tr>
                                    <td>Payment Method</td>
                                    <td>{{$data->paymentmethod}}</td>
                                </tr>

                                <tr>
                                    <td>Registration Date</td>
                                    <td>{{$data->registration}}</td>
                                </tr>

                                <tr>
                                    <td>Franchise Name</td>
                                    <td>{{$data->name}}</td>
                                </tr>
                        </thead>
                        </table>
                    </div>
                </form>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection