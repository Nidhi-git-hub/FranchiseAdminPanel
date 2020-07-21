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

                    @if(session('delete'))
                    <p class="alert alert-danger">
                        {{session('delete')}}
                    </p>
                    @endif

                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date of Birth</th>
                                    <th>Course</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            
                            <tbody>
                                @foreach($data as $datas)
                                    <tr>
                                        <td>{{$datas->sname}}</td>
                                        <td>{{$datas->dob}}</td>
                                        <td>{{$datas->course}}</td>
                                        <td>{{$datas->email}}</td>
                                        <td>
                                            <a href="{{url('/student/shows/'.$datas->id)}}"><i class="fa fa-address-card fa-2x" style="color: blue"></i></a>
                                            <a href="{{url('/student/edits/'.$datas->id)}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="color: green"></i></a>
                                            <a href="{{url('/student/delete/'.$datas->id)}}"><i class="fa fa-trash-o fa-2x" style="color: red"></i></a>
                                        </td>
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