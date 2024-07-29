<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
// use App\Models\Attendence;
// use App\Models\LeaveApply;
// use App\Models\Admin;
// use App\Models\designation;
// use App\Models\Department;
// use App\Models\Education;
// use App\Models\Resignationdetails;
// use App\Mail\TestMail;
// use Haruncpi\LaravelIdGenerator\IdGenerator;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Mail;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use DateTimeZone;
// use DateTime;
// use Carbon\Carbon;


class frontendController extends Controller
{

    public function index()
    {
        return view('frontend/index');
    }

    public function contact()
    {
        return view('frontend/contact');
    }

    public function contactSave(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'phone' => 'required',
            'message' => 'required',
            'email' => 'required|email',
        ]);

        // Check for unique email in the 'contact' table
        $request->validate([
            'email' => 'unique:contact,email',
        ]);

        // Do something with the data (e.g., save to the database)
        $contact=new Contact;
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->phone=$request->input('phone');
        $contact->message=$request->input('message');
        $contact->save();
        return redirect('/contact')->with('status','save successfully');
        // die("checksddfdf");
    }
}