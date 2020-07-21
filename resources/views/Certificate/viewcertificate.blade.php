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
                        <h3 style="margin-top: -8px"><center><span style="color: white;">Add Certificate</span></center></h3></div></center>
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
                                    <th>S. No.</th>
                                    <th>Reg No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Franchise Name</th>
                                    <th>Action</th>
                                </tr>
                            
                            <tbody>
                                <?php $count=1; ?>
                                @foreach($data as $datas)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$datas->regno}}</td>
                                        <td>{{$datas->sname}}</td>
                                        <td>{{$datas->email}}</td>
                                        <td>{{$datas->course}}</td>
                                        <td>{{$datas->name}}</td>
                                        <td>
                                            <button type="submit" class="btn btn-primary"><a href="{{url('/data/addcertificate/' .$datas->id)}}">Add Certificate</a></button>
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