<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use App\Models\Student;

class certificateController extends Controller
{
    public function index()
    {
        $data=Certificate::all();
        $data=compact('data');
        return view('admin/certificate')->with($data);
    }

    public function form()
    {
        $url=url('/admin/upload');
        $title = "Upload Certificate";
        $student = new Student();
        $data=compact('url' , 'title','student');
       
        return view('admin/uploadcertificate')->with($data);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'rollno'=>'required',
            'certificate'=>'required',
            'image'=>'required',
        ]);
        $rollNumber= $request->input('rollno');
        $student = Student::where('rollno', $rollNumber)->get();
        $data= new Certificate;
        $data->rollno = $request->input('rollno');
        if($request->hasfile('certificate'))
        {
         $file=$request->file('certificate');
         $extension = $file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/image',$filename);
         $data->certificate=$filename;
        }
        $data->name = $student->first()->name;
        $data->batch = $student->first()->course;
        if($request->hasfile('image'))
        {
         $file=$request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/image',$filename);
         $data->image=$filename;
        }
        $data->save();
        $data=Certificate::all();
        $data=compact('data');
        return view('admin/certificate')->with($data);
    }

    public function edit_certificate($id)
    {
        $student=Certificate::find($id);
        $url=url('/certificate/update')."/".$id;
        $title="Update Certificate";
        $data=compact('student','title','url');
        return view('admin/uploadcertificate')->with($data);
    }

    public function update_certificate(Request $request,$id)
    {
        $data=Certificate::find($id);
        $rollNumber = $request->input('rollno');
        $student = Student::where('rollno', $rollNumber)->get();
        $data->rollno = $request->input('rollno');
        if($request->hasfile('certificate'))
        {
         $file=$request->file('certificate');
         $extension = $file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/image',$filename);
         $data->certificate=$filename;
        }
        $data->name = $student->first()->name;
        $data->batch = $request->input('batch');
        if($request->hasfile('image'))
        {
         $file=$request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/image',$filename);
         $data->image=$filename;
        }
        $data->save();
        $data=Certificate::all();
        $data=compact('data');
        return view('admin/certificate')->with($data);
    }

    public function delete_certificate($id)
    {
        $student=Certificate::find($id)->delete();
        $data=Certificate::all();
        $data=compact('data');
        return view('admin/certificate')->with($data);
    }
}
