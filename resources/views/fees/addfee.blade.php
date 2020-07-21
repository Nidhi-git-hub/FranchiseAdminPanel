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

                    <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">

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
                                    <td>Course Fee</td>
                                    <td>{{$data->coursefee}}</td>
                                </tr>
                                <tr>
                                    <td>Submitted Fee</td>
                                    <td>{{$data->submittedfee}}</td>
                                </tr>
                                
                                <tr>
                                    <td>Remaining Fee</td>
                                    <td>{{$data->coursefee-$data->submittedfee}}</td>
                                </tr>
                        </thead>
                        </table>

                        <br>
                        <input type="hidden" name="regno" value="{{$data->regno}}">
                        <input type="hidden" name="name" value="{{$data->name}}">
                        <input type="hidden" name="coursefee" value="{{$data->coursefee}}">
                        

                        <div class="col-12">
                        <div class="form-group">
                            <label for="addfee" class=" form-control-label">Add Fee</label>
                            <input type="integer" id="number" placeholder="Enter Fees" class="form-control" name="submittedfee">
                        </div>
                        </div>

                        <div class="col-12">
                        <div class="form-group">
                            <label for="addfee" class=" form-control-label">Remark</label>
                            <input type="text" id="paymentremark" placeholder="Enter Remark" class="form-control" name="paymentremark">
                        </div>
                        </div>

                        <div class="col-12">
                        <div class="form-group">
                            <label for="paymentmethod" class=" form-control-label">Payment Method</label>
                            <input type="text" id="paymentmethod" placeholder="Enter payment method" class="form-control" name="paymentmethod">
                        </div>
                        </div>

                        <div class="col-12">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>

                    </div>
                </form>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection