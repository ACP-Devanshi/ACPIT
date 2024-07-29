<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Student;
use App\Models\Monthlyattendence;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\admin\Log;
use DateTimeZone;
use DateTime;

class studentController extends Controller
{
    public function index()
    {
        $data=Student::all();
        $data=compact('data');
        return view('admin/student')->with($data);
    }


    public function search(Request $request)
    {
        
        if (isset($request['name']) && !empty($request['name'])) {
          
            $data=Student::where('name',$request['name'])->get();
           
        }

        if (isset($request['rollno']) && !empty($request['rollno'])) {
            $data=Student::where('rollno',$request['rollno'])->get();
        }

        if (isset($request['course']) && !empty($request['course'])) {
          
            $data=Student::where('course',$request['course'])->get();
           
        }
        if ((isset($request['name']) && !empty($request['name'])) && (isset($request['rollno']) && !empty($request['rollno']))) {
          
            $data=Student::where('name',$request['name'])
            ->where('rollno',$request['rollno'])->get();
           
        }

        if ((isset($request['name']) && !empty($request['name'])) && (isset($request['course']) && !empty($request['course']))) {
          
            $data=Student::where('name',$request['name'])
            ->where('course',$request['course'])->get();
           
        }
        if ((isset($request['rollno']) && !empty($request['rollno'])) && (isset($request['course']) && !empty($request['course']))) {
          
            $data=Student::where('rollno',$request['rollno'])
            ->where('course',$request['course'])->get();
           
        }

        if ((isset($request['name']) && !empty($request['name'])) && (isset($request['rollno']) && !empty($request['rollno'])) && (isset($request['course']) && !empty($request['course']))) {
          
            $data=Student::where('name',$request['name'])
            ->where('rollno',$request['rollno'])
            ->where('course',$request['course'])->get();
           
        }

        $data=compact('data');
        return view('admin/student')->with($data);
    }

    public function form()
    {
        $url=url('/admin/studentsave');
        $title = "Registation Form";
        $student = new Student();
        $data=compact('url' , 'title','student');
        return view('admin/studentform')->with($data);;
    }
    public function save(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'fname'=>'required',
            'mname'=>'required',
            'contact'=>'required|min:10',
            'course'=>'required',
            'dob'=>'required',
            'regdate'=>'required',
            'gender'=>'required',
            'image'=>'required',
            'qualification'=>'required',
            'address'=>'required',
        ]);
        $this->validate($request,[
            'email'=>'unique:student,email'
        ]);
        $qualiArray = $request->input('qualification');
        $serializedData = json_encode($qualiArray);
        $data= new Student;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->fname = $request->input('fname');
        $data->mname = $request->input('mname');
        $data->contact = $request->input('contact');
        $data->course = $request->input('course');
        $data->dob = $request->input('dob');
        $data->regdate = $request->input('regdate');
        $data->gender = $request->input('gender');
        $data->qualification = $serializedData;
        $data->address = $request->input('address');
        if($request->hasfile('image'))
        {
         $file=$request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/image',$filename);
         $data->image=$filename;
        }
        $data->rollno = IdGenerator::generate(['table' => 'student', 'length' => 8, 'prefix' => 'ACP-']);
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $allCharacters = $characters . $numbers;
       // Generate a random password with a length of 6 characters
       $password = str_shuffle(Str::random(6, $allCharacters));
       $data->password = $password;
   
       $data->save();
       $date=new DateTime();
       $time=new DateTimeZone('asia/kolkata');
       $date->setTimezone($time);
       $y=$date->format('Y');
       $m=$date->format('F');
       $my = $m." ".$y;
       $monthlyAttendence= new Monthlyattendence();
       $monthlyAttendence->name=$request->input('name');
       $monthlyAttendence->rollno=$data->rollno;
       $monthlyAttendence->total=0;
       $monthlyAttendence->percentage=0;
       $monthlyAttendence->month_year= $my;
       $monthlyAttendence->save();
       $data=Student::all();
       $data=compact('data');
       return view('admin/student')->with($data);
    }

    public function edit_stu($id)
    {
        $student=Student::find($id);
        $url=url('/student/update')."/".$id;
        $title="Update Students Details";
        $data=compact('student','title','url');
        return view('admin/studentform')->with($data);
    }
    public function update_stu(Request $request,$id)
    {
        $data=Student::find($id);
        if($request->hasfile('image'))
        {
         $file=$request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/image/',$filename);
         $data->image=$filename;
        }
        $qualiArray = $request->input('qualification');
        $serializedData = json_encode($qualiArray);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->fname = $request->input('fname');
        $data->mname = $request->input('mname');
        $data->contact = $request->input('contact');
        $data->course = $request->input('course');
        $data->dob = $request->input('dob');
        $data->regdate = $request->input('regdate');
        $data->gender = $request->input('gender');
        $data->qualification = $serializedData;
        $data->address = $request->input('address');
        $data->save();
        $data=Student::all();
        $data=compact('data');
        return view('admin/student')->with($data);
   
    }

    
    public function delete_stu($id)
    {
        $student=Student::find($id)->delete();
        $data=Student::all();
        $data=compact('data');
        return view('admin/student')->with($data);
    }
    
}
