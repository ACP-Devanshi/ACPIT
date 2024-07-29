<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ebook;

class ebookController extends Controller
{
    public function index()
    {
        $data=Ebook::all();
        $data=compact('data');
        return view('admin/ebook')->with($data);
    }

    public function form()
    {
        $url= url('/admin/uploadebook');
        $title = "Upload Ebook";
        $ebook = new Ebook();
        $data=compact('url' , 'title','ebook');
       
        return view('admin/ebookform')->with($data);
    }
    public function edit_ebook($id)
    {
        $ebook=Ebook::find($id);
        $url=url('/ebook/update')."/".$id;
        $title="Update Ebook";
        $data=compact('ebook','title','url');
        return view('admin/ebookform')->with($data);
    }


    public function upload(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'ebook'=>'required',
            'image'=>'required',
            'batch'=>'required',
        ]);
        $data= new Ebook;
        $data->title = $request->input('title');
        
        $qualiArray = $request->input('batch');
        $serializedData = json_encode($qualiArray);
        $data->batch = $serializedData;
        if($request->hasfile('ebook'))
        {
         $file=$request->file('ebook');
         $extension = $file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/image',$filename);
         $data->ebook=$filename;
        }
        if($request->hasfile('image'))
        {
         $file=$request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/image',$filename);
         $data->image=$filename;
        }
        $data->save();
        $data=Ebook::all();
        $data=compact('data');
        return view('admin/ebook')->with($data);
    }

    public function update_ebook(Request $request,$id)
    {
        $data=Ebook::find($id);
        $data->title = $request->input('title');
        if($request->hasfile('ebook'))
        {
         $file=$request->file('ebook');
         $extension = $file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/image',$filename);
         $data->ebook=$filename;
        }
        $qualiArray = $request->input('batch');
        $serializedData = json_encode($qualiArray);
        $data->batch = $serializedData;
        if($request->hasfile('image'))
        {
         $file=$request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/image',$filename);
         $data->image=$filename;
        }
        $data->save();
        $data=Ebook::all();
        $data=compact('data');
        return view('admin/ebook')->with($data);
    }


    public function delete_ebook($id)
    {
        $student=Ebook::find($id)->delete();
        $data=Ebook::all();
        $data=compact('data');
        return view('admin/ebook')->with($data);
    }
}
