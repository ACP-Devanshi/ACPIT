<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\JoinNow;
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


class adminController extends Controller
{

    public function index()
    {
        return view('admin/index');
    }

    public function fees()
    {
        return view('admin/fees');
    }

    public function contactUs()
    {
        $data=Contact::all();
        $data=compact('data');
        return view('admin/contactUs')->with($data);
    }

    public function joinUs()
    {
        $data=JoinNow::all();
        $data=compact('data');
        return view('admin/joinUs')->with($data);
    }
}