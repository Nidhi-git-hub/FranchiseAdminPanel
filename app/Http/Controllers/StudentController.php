<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Franchise;
use DB;
use App\Fees;
use Auth;

class StudentController extends Controller
{       
    public function master()
    {
    	return view('layouts.master');
    }
    public function adds()
    {
        // echo "string";
        // exit;
    	return view('student.adds');
    }
    public function save(Request $request)
    {
    	$file=$request->file('image');
        // dd($file);
        // exit;

        $filename='image' . time().'.'.$request->image->extension();
        // dd($filename);
        // exit;

        $file->move("upload/",$filename);
        // dd($file);
        // exit; 

        $obj=new User;
        $obj->name=$request->sname;
        $obj->email=$request->email;
        $obj->password=bcrypt($request->password);
        $obj->type=2;
        $obj->save();
        

    	$data= new Student;
        $data->suser_id=$obj->id;

    	$data->sname=$request->sname;
    	$data->fname=$request->fname;
    	$data->dob=$request->dob;
    	$data->course=$request->course;
    	$data->contactnumber=$request->contactnumber;
    	$data->email=$request->email;
    	$data->password=$request->password;
    	$data->coursefee=$request->coursefee;
    	$data->submittedfee=$request->submittedfee;
    	$data->paymentremark=$request->paymentremark;
    	$data->paymentmethod=$request->paymentmethod;
        $data->registration=$request->registration;
        $data->image=$filename;

        $data->name=$request->name;


        $data->save();
        // dd($data);
        // exit;

        if($data)
        {
            $num_padded=sprintf("%04s",$data->id);
            DB::table('students')->where('id',$data->id)->update(['regno'=>"Ape2019".$num_padded]);

            $reg= new Fees;
            $reg->regno="Ape2019".$num_padded;
            $reg->coursefee=$request->coursefee;
            $reg->submittedfee=$request->submittedfee;
            $reg->method=$request->paymentmethod;
            $reg->remark=$request->paymentremark;
            $reg->name=$request->name;  //franchise name
            $reg->save();

            return back()->with('success',1); 

        }

        if($data)
        {
         return redirect('adds')->with('message','Successfully Added');
        }


   }    

   public function displays()
   {

        $data=Student::where('name',Auth::user()->name)->orderBy('id','desc')->get();
        //$data=Student::all();
        // dd($data);
        return view('student.displays',compact('data'));
    }

     public function shows($id)
    {
        $student=Student::find($id);
        // dd($student);
        return view('student.views',compact('student'));
    }

    public function edits($id)
    {
        $student=Student::find($id);
        return view('student.edits',compact('student'));
    }

   
    public function update(Request $request)
    {
        if($request->hasFile('image'))
        {
            $file=$request->file('image');

            $filename='image' . time().'.'.$request->image->extension();

            $file->move("upload/",$filename);
        

        $student =Student::find($request->id);

        $student->sname=$request->sname;
        $student->fname=$request->fname;
        $student->dob=$request->dob;
        $student->course=$request->course;
        $student->contactnumber=$request->contactnumber;
        $student->email=$request->email;
        $student->password=$request->password;
        $student->coursefee=$request->coursefee;
        $student->submittedfee=$request->submittedfee;
        $student->paymentremark=$request->paymentremark;
        $student->paymentmethod=$request->paymentmethod;
        $student->registration=$request->registration;
        $student->image=$filename;
        
        $updated=$student->save();

        User::where('id',$request->suser_id)->update([
            'name'=>$request->sname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        }

        else
        {
            $student =Student::find($request->id);

        $student->sname=$request->sname;
        $student->fname=$request->fname;
        $student->dob=$request->dob;
        $student->course=$request->course;
        $student->contactnumber=$request->contactnumber;
        $student->email=$request->email;
        $student->password=$request->password;
        $student->coursefee=$request->coursefee;
        $student->submittedfee=$request->submittedfee;
        $student->paymentremark=$request->paymentremark;
        $student->paymentmethod=$request->paymentmethod;
        $student->registration=$request->registration;
        
        
        $updated=$student->save();

        User::where('id',$request->suser_id)->update([
            'name'=>$request->sname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        }

        if($updated){
            return redirect('displays')->with('message','Successfully Updated');
        }
    }


    public function delete($id)
    {
        $post=Student::find($id);
        $deleted=$post->delete();
        if($deleted)
        {
            return redirect('displays')->with('delete','Successfully Deleted');
        }
    }


    public function showcertificate()
    {
        $data=Student::where('email',Auth::user()->email)->first();
        return view('Certificate.showcertificate',compact('data'));
    }

    public function myprofile()
    {
        $data=Student::where('email',Auth::user()->email)->first();
        return view('Certificate.myprofile',compact('data'));
    }

}
