@extends('layouts.master')
@section("title","display")




        @section('data')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <center><div class="card-header" style="background-color: #4f4fd2;border-radius: 33px; width: 761px;height: 43px;margin-top: 12px;">
                        <h3 style="margin-top: -8px"><center><span style="color: white;">All Students Data</span></center></h3></div></center>
                    </div>

                    @if(session('message'))
                    <p class="alert alert-success">
                        {{session('message')}}
                    </p>
                    @endif

                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Reg No.</th>
                                    <th>Submitted Fee</th>
                                    <th>Payment Method</th>
                                    <th>Payment Remark</th>
                                    <th>Course Fee</th>
                                    <th>Date</th>
                                </tr>
                            
                            <tbody>
                                @foreach($shows as $show)

                                <input type="hidden" name="name" value="{{$show->name}}">
                                    <tr>
                                        <td>{{$show->regno}}</td>
                                        <td>{{$show->submittedfee}}</td>
                                        <td>{{$show->paymentmethod}}</td>
                                        <td>{{$show->paymentremark}}</td>
                                        <td>{{$show->coursefee}}</td>
                                        <td>{{$show->created_at}}</td>
                                    </tr>
                                    @endforeach    
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