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
                        <h3 style="margin-top: -8px"><center><span style="color: white;">Add Student Certificate</span></center></h3></div></center>
                    </div><br>
                    <form action="{{url('/savecertificate')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">

                    {{csrf_field()}}


                    <div class="card-body">
                        
                        <input type="hidden" name="id" value="{{$data->id}}">
                        
                        <div class="col-12">
                        <div class="form-group">
                            <label for="addfee" class=" form-control-label">Reg No.</label>
                            <input type="integer" id="number" placeholder="Enter regno" class="form-control" name="regno" value="{{$data->regno}}">
                        </div>
                        </div>

                        <div class="col-12">
                        <div class="form-group">
                            <label for="addfee" class=" form-control-label">Student Name</label>
                            <input type="text" id="paymentremark" placeholder="Enter name" class="form-control" name="sname" value="{{$data->sname}}">
                        </div>
                        </div>

                        <div class="col-12">
                        <div><label for="certificate" class=" form-control-label">Add Certificate</label><input type="file" id="certificate" name="certificate"></div>
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