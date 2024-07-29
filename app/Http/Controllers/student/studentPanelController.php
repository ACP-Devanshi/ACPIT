<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Certificate;
use App\Models\Ebook;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class studentPanelController extends Controller
{
    public function profile()
    {
        $ebook = Ebook::All();
        $data = compact('ebook');
        return view('student/index')->with($data);
    }
    public function index()
    {
        $ebook=Ebook::all();
        $data=compact('ebook');
        return view('student/login')->with($data);
    }

    public function attendance()
    {
        $ebook=Ebook::all();
        $data=compact('ebook');
        return view('student/attendance')->with($data);;
    }

    public function fees()
    {
        $ebook=Ebook::all();
        $data=compact('ebook');
        return view('student/fees')->with($data);
    }

    public function certificate()
    {
        $data=Certificate::all();
        $ebook=Ebook::all();
        $data=compact('data','ebook');
        return view('student/certificate')->with($data);
    }

    public function ebook($id)
    {
        $ebook=Ebook::all();
        $ebookwithid=Ebook::find($id);
        $data=compact('ebook','ebookwithid');
        return view('student/ebook')->with($data);
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'rollno'=>'required',
            'password'=>'required', 
        ]);
        $password=$request->password;
        $rollno=$request->rollno;
        $session= Student::where('rollno',$rollno)->get();
        // $request->session()->forget('id');
        // $request->session()->forget('name');
        // $request->session()->forget('image');
        // echo"<pre>";
        // print_r($session);
        if(count($session)>0)
        {
            $user_id = $session[0]->id;
            $user_image = $session[0]->image;
            $user_name = $session[0]->name;
            $user_rollno = $session[0]->rollno;
            $user_batch = $session[0]->course;
            $user_address = $session[0]->address;
            $user_fname= $session[0]->fname;
            $user_regdate= $session[0]->regdate;
            session(['user_id' => $user_id]);
            session(['user_name' => $user_name]);
            session(['user_image' => $user_image]);
            session(['user_rollno' => $user_rollno]);
            session(['user_batch' => $user_batch]);
            session(['user_address' => $user_address ]);
            session(['user_fname' => $user_fname]);
            session(['user_regdate' => $user_regdate ]);
            
            // Print the session data (for debugging purposes)
            // print_r(session()->all());
            // die("hhh");
            return redirect('/student/profile');
        }
        return view('student/login');
    }

    public function logout()
    {
        // print_r(session()->all());
        // echo"<br>";
      Session::forget(['user_id', 'user_name', 'user_image','user_rollno', 'user_batch', 'user_address' ,'user_fname' , 'user_regdate']);
      Session()->flush();
    //    print_r(session()->all());
    //         die("hhh");
      Auth::logout();
      return redirect('/');
    }
}
