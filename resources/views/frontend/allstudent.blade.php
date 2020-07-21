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
                                    <th>Franchise Name</th>
                                    
                                </tr>
                            
                            <tbody>
                                @foreach($data as $datas)
                                    <tr>
                                        <td>{{$datas->sname}}</td>
                                        <td>{{$datas->dob}}</td>
                                        <td>{{$datas->course}}</td>
                                        <td>{{$datas->email}}</td>
                                        <td>{{$datas->name}}</td>
                                        
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