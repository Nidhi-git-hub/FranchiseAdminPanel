@extends('layouts.master')
@section("title","Add Franchise")

@section('data')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <center><div class="card-header" style="background-color: #4f4fd2;border-radius: 33px; width: 761px;height: 43px;margin-top: 12px;">
                        <h3 style="margin-top: -8px"><center><span style="color: white;">Edit Franchise Data</span></center></h3></div></center>
        </div>
        <div class="card-body card-block" style="margin-left: 3%;margin-right: 3%">
            <form action="{{url('/curds/update')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">

                {{csrf_field()}}
                <div class="row form-group">
                    <input type="hidden" name="id" value="{{$curds->id}}">
                    <input type="hidden" name="user_id" value="{{$curds->user_id}}">
                    
                    <div class="col-8">
                        <div class="col-md-3"><label for="name" placeholder="Enter name" class=" form-control-label">Franchise name</label></div>
                        
                        <input type="text" id="company" placeholder="Enter name" class="form-control" name="name" value="{{$curds->name}}">
                    </div>
                
                    <div class="col-8">
                        <div class="form-group"><label for="address" class=" form-control-label">Address</label><input type="text" id="address" placeholder="Enter address" class="form-control" name="address" value="{{$curds->address}}"></div>
                     </div>

                     <div class="col-8">
                        <div class="form-group"><label for="contact" class=" form-control-label">Contact No.</label><input type="text" id="contact" placeholder="Enter contact no." class="form-control" name="contact" value="{{$curds->contact}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="email" id="email" placeholder="Enter Email" class="form-control" name="email" value="{{$curds->email}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="password" class=" form-control-label">Password</label><input type="password" id="password" placeholder="Enter Password" class="form-control" name="password" value="{{$curds->name}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="contactname" class=" form-control-label">Enter contact person name</label><input type="contactname" id="contactname" placeholder="Enter contact person name" class="form-control" name="contactname" value="{{$curds->contactname}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="contactnumber" class=" form-control-label">Contact Person Number</label><input type="text" id="contactnumber" placeholder="Enter contact person number" class="form-control" name="contactnumber" value="{{$curds->contactnumber}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="Bank Account No." class=" form-control-label">Bank Account No.</label><input type="number" id="number" placeholder="Enter bank account no" class="form-control" name="accno" value="{{$curds->accno}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="IFSC Code" class=" form-control-label">IFSC Code</label><input type="ifsc" id="ifsc" placeholder="Enter IFSC Code" class="form-control" name="ifsc" value="{{$curds->ifsc}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="Bank Account Holder" class=" form-control-label">Bank Account Holder</label><input type="text" id="holder" placeholder="Enter Bank Account Holder" class="form-control" name="account" value="{{$curds->account}}"></div>
                    </div>

                    <div class="col-8">
                        <div class="form-group"><label for="Bank Name" class=" form-control-label">Bank Name</label><input type="text" id="bankname" placeholder="Enter bank name" class="form-control" name="bankname" value="{{$curds->bankname}}"></div>
                    </div>
                    
                </div>
                
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>                
        </div>
    </div>
</div>

@endsection