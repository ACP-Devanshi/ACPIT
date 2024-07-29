<?php

namespace App\Http\Controllers\attendence;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Attendence;
use App\Models\Monthlyattendence;
use DateTimeZone;
use DateTime;

class attendenceController extends Controller
{
    public function index()
    {
        return view('attendence/index');
    }

    public function signin(Request $request)
    { 
        $password=$request->password;
        $rollno=$request->rollno;
        $data= new Attendence;
        $date=new DateTime();
        $time=new DateTimeZone('asia/kolkata');
        $date->setTimezone($time);
        $t=$date->format('H:i:s');
        $dt=$date->format('y:m:d');
        $check = Student::where('rollno', $rollno)
            ->where('password', $password) // Assuming $password is the provided password
            ->get();
        if(count($check)>0)
        {
            if($request->signIn==1)
            {
                $check = Attendence::where('rollno', $rollno)
                ->where('date', $dt) // Assuming $password is the provided password
                ->get();
                if(count($check)>0)
                {
                    $relogin=1;
                    $relogin=compact('relogin');
                    return view('attendence/index')->with($relogin);
                }
                else{
                $data->rollno = $request->input('rollno');
                $data->punchIn=$t;
                $data->punchOut = 0;
                $data->batchTime = $request->input('batch_time');
                $data->date = $dt;
                $data->status = 0;
                // $stu_id=$request->input('rollno');
                // $punchout=0;
                // $batch=
                $data->save();
                $true=1;
                $true=compact('true');
                return view('attendence/index')->with($true);
                }
            }
            else if($request->signOut==1)  
            {
              $check = Attendence::where('rollno', $rollno)
              ->where('date', $dt) // Assuming $password is the provided password
              ->first();
              if($check)
              {
                $date->setTimezone($time);
                $y=$date->format('Y');
                $m=$date->format('F');
                $my = $m." ".$y;
                $MonthlyAttendence = Monthlyattendence::where('rollno', $rollno)->where('month_year', $my)->first();
                $d = $date->format('d') . 'th';
                if($MonthlyAttendence->$d=="A")
                {
                    $total = $MonthlyAttendence->total;
                    if ($MonthlyAttendence) {
                        $d = $date->format('d') . 'th';
                        $MonthlyAttendence->$d = "P";
                        $MonthlyAttendence->total = $total + 1;
                        $MonthlyAttendence->save();
                    
                    }
                    $check->punchout = $t;
                    $check->status = 1; // Replace $newValue with the new value for punchout
                    $check->save();
                    $logout=1;
                    $logout=compact('logout');
                    return view('attendence/index')->with($logout);
               }
               else{
                
                    $relogout=1;
                    $relogout=compact('relogout');
                    return view('attendence/index')->with($relogout);
               }
              }
              else
              {
                $loginfirst=1;
                $loginfirst=compact('loginfirst');
                return view('attendence/index')->with($loginfirst);
              }
            }  
           
        }
        else{
            $false=1;
            $false=compact('false');
            return view('attendence/index')->with($false);
        }
        
    }
}
