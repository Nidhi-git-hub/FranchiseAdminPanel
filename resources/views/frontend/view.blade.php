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
                        <h3 style="margin-top: -8px"><center><span style="color: white;">All Franchise Data</span></center></h3></div></center>
                    </div>

                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>Address</th>
                                    <th>contact</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>contactname</th>
                                    <th>contactnumber</th>
                                    <th>accno</th>
                                    <th>ifsc</th>
                                    <th>account</th>
                                    <th>bankname</th>                                  
                                </tr>
                            
                            <tbody>
                                
                                    <tr>
                                        <td>{{$curds->name}}</td>
                                        <td>{{$curds->address}}</td>
                                        <td>{{$curds->contact}}</td>
                                        <td>{{$curds->email}}</td>
                                        <td>{{$curds->password}}</td>
                                        <td>{{$curds->contactname}}</td>
                                        <td>{{$curds->contactnumber}}</td>
                                        <td>{{$curds->accno}}</td>
                                        <td>{{$curds->ifsc}}</td>
                                        <td>{{$curds->account}}</td>
                                        <td>{{$curds->bankname}}</td>
                                        
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