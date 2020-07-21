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
                        <h3 style="margin-top: -8px"><center><span style="color: white;">All Fees Data</span></center></h3></div></center>
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
                                    <th>Course Fee</th>
                                    <th>Remaining Fee</th>
                                    <th>Action</th>
                                </tr>
                            
                            <tbody>
                                <?php $count=1; ?>
                                @foreach($data as $datas)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$datas->regno}}</td>
                                        <td>{{$datas->coursefee}}</td>
                                        <td>{{$datas->coursefee-$datas->submittedfee}}</td>
                                        @if($datas->coursefee!=$datas->submittedfee)
                                        <td>
                                            <button type="submit" class="btn btn-primary"><a href="{{url('/curds/addfee/' .$datas->id)}}">Add Fee</a></button>
                                        </td>
                                        @else
                                        <a href=""></a>
                                        @endif
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