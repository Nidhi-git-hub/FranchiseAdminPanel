<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;
use App\User;
use Auth;
use App\Student;
use App\Fees;

class FranchiseController extends Controller
{
    public function master()
    {
    	return view('layouts.master');
    }
    public function add()
    {
    	return view('frontend.add');
    }
    public function save(Request $request)
    {
    	 //echo "string";
    	// $this->validate($request,
    	// 	[
    	// 		"name"=>"required",
    	// 		"address"=>"required",
    	// 		"city"=>"required",
    	// 		"email"=>"required|max:30|min:8|email|unique:hotel",
    	// 		"contact"=>"required",
    	// 		"cost"=>"required",
    	// 		"bankname"=>"required",
    	// 		"account"=>"required",
    	// 		"accno"=>"required",
    	// 		"ifsc"=>"required",
    	// 	],[
    	// 		"name.required"=>"name should be filled",
    	// 		"address.required"=>"address should be filled",

    	// 	]
    	// );
        $obj=new User;
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->password=bcrypt($request->password);
        $obj->type=0;
        $obj->save();
        
    	$data= new Franchise;
        $data->user_id=$obj->id; //user_id is in franchise and id is in user , user_id is child of id

    	$data->name=$request->name;
    	$data->address=$request->address;
    	$data->contact=$request->contact;
    	$data->email=$request->email;
    	$data->password=$request->password;
    	$data->contactname=$request->contactname;
    	$data->contactnumber=$request->contactnumber;
    	$data->accno=$request->accno;
    	$data->ifsc=$request->ifsc;
        $data->account=$request->account;
        $data->bankname=$request->bankname;
        $data->save();

        
    	// dd($data);

    	if($data)
        {
    		return redirect('add')->with('message','Successfully Added');
    	}
    	
    }
    public function display(){

        $data=Franchise::all();
        // print_r($data);
        return view('frontend.display',compact('data'));
    }
    public function show($id)
    {
        $curds=Franchise::find($id);
        // dd($curds);
        return view('frontend.view',compact('curds'));
    }
    public function edit($id)
    {
        $curds=Franchise::find($id);
        return view('frontend.edit',compact('curds'));
    }
    public function update(Request $request)
    {
        //echo "string";

        $curds =Franchise::find($request->id);

        $curds->name=$request->name;
        $curds->address=$request->address;
        $curds->contact=$request->contact;
        $curds->email=$request->email;
        $curds->password=$request->password;
        $curds->contactname=$request->contactname;
        $curds->contactnumber=$request->contactnumber;
        $curds->accno=$request->accno;
        $curds->ifsc=$request->ifsc;
        $curds->account=$request->account;
        $curds->bankname=$request->bankname;

        $updated=$curds->update();

        User::where('id',$request->user_id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        

        if($updated){
            return redirect('display')->with('message','Successfully Updated');
        }
    }
    public function delete($id)
    {
        $post=Franchise::find($id);
        $deleted=$post->delete();
        if($deleted){
            return redirect('display')->with('delete','Successfully Deleted');
        }
    }

    public function allstudent()
    {
        $data=Student::all();
        return view('frontend.allstudent',compact('data'));
    }

    public function viewcertificate()
    {
        $data=Student::all();
        return view('Certificate.viewcertificate',compact('data'));
    }

    public function addcertificate($id)
    {
        $data=Student::find($id);
        return view('Certificate.addcertificate',compact('data'));
    }

    public function savecertificate(Request $request)
    {
        if($request->hasfile('certificate'))
        {
            $file=$request->file('certificate');
            $filename='certificate' . time().'.'.$request->certificate->extension();
            $file->move("upload/",$filename);

            $obj=Student::find($request->id);
            $obj->certificate=$filename;

            $obj->save(); 
        }

        return back()->with('success','Successfully submitted!');
    }

}
