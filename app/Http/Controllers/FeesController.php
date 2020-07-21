<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Franchise;
use DB;
use App\Fees;
use Auth;


class FeesController extends Controller
{
    public function feetable()
   {
        $data=Student::where('name',Auth::user()->name)->orderBy('id','desc')->get();
        //$data=Student::all();
        // dd($data);
        return view('fees.feetable',compact('data'));
    }

    public function addfee($id)
    {
    	$data=Student::where('id',$id)->first();
    	return view('fees.addfee',compact('data'));
    }

    public function updatefee(Request $request)
    {
    	$obj=new Fees;
    	$obj->regno=$request->regno;
    	$obj->coursefee=$request->coursefee;
    	$obj->submittedfee=$request->submittedfee;
    	$obj->method=$request->paymentmethod;
    	$obj->remark=$request->paymentremark;	
    	$obj->name=$request->name;

    	$is_saved=$obj->save();

    	 Student::where('regno',$request->regno)->increment('submittedfee',$request->submittedfee);

    	if($is_saved){
    		return back()->with('success',1);
    	}
    }

    public function showfee()
    {
    	$shows=DB::table('students')->get();
    	return view('fees.showfee',compact('shows'));
    }
}