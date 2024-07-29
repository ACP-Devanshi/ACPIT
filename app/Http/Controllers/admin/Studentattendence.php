<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendence;
use App\Models\Student;
use App\Models\Monthlyattendence;
use DateTimeZone;
use DateTime;
use Carbon\Carbon;

class Studentattendence extends Controller
{
    public function index()
    {
        $data=MonthlyAttendence::all();
        $date=new DateTime();
        $time=new DateTimeZone('asia/kolkata');
        $date->setTimezone($time);
        $t=$date->format('H:i:s');
        $dt=$date->format('d');
        $data=compact('data','dt');
        return view('admin/attendence')->with($data);
    }

    public function search(Request $request)
    {
        
       
        if (isset($request['month']) && !empty($request['month'])) {
            $date = Carbon::createFromFormat('Y-m', $request['month']);
            $formattedDate = $date->format('F Y');
            $data=MonthlyAttendence::where('month_year',$formattedDate)->get();
        
          
        }
        
        if (isset($request['name']) && !empty($request['name'])) {
          
            $data=MonthlyAttendence::where('name',$request['name'])->get();
           
        }

        if (isset($request['rollno']) && !empty($request['rollno'])) {
            $data=MonthlyAttendence::where('rollno',$request['rollno'])->get();
        }

        if ((isset($request['name']) && !empty($request['name'])) && (isset($request['rollno']) && !empty($request['rollno']))) {
            $data=MonthlyAttendence::where('name',$request['name'])
            ->where('rollno',$request['rollno'])->get();
        }

        if ((isset($request['name']) && !empty($request['name'])) && (isset($request['month']) && !empty($request['month']))) {
            $date = Carbon::createFromFormat('Y-m', $request['month']);
            $formattedDate = $date->format('F Y');
            $data=MonthlyAttendence::where('month_year',$formattedDate)
                                     ->where('name',$request['name'])->get();
           
        }
        if ((isset($request['rollno']) && !empty($request['rollno'])) && (isset($request['month']) && !empty($request['month']))) {
            $date = Carbon::createFromFormat('Y-m', $request['month']);
            $formattedDate = $date->format('F Y');
            $data=MonthlyAttendence::where('month_year',$formattedDate)
                                     ->where('rollno',$request['rollno'])->get();
           
        }

        if ((isset($request['name']) && !empty($request['name'])) && (isset($request['rollno']) && !empty($request['rollno'])) && (isset($request['month']) && !empty($request['month']))) {
            $date = Carbon::createFromFormat('Y-m', $request['month']);
            $formattedDate = $date->format('F Y');
            $data=Student::where('name',$request['name'])
            ->where('rollno',$request['rollno'])
            ->where('month_year',$formattedDate)->get();
           
        }
        $date=new DateTime();
        $time=new DateTimeZone('asia/kolkata');
        $date->setTimezone($time);
        $t=$date->format('H:i:s');
        $dt=$date->format('d');
        $data=compact('data','dt');
        // print_r($data);
        //     die("esho");
        return view('admin/attendence')->with($data);
    }

    public function generate()
    {
        $date=new DateTime();
        $time=new DateTimeZone('asia/kolkata');
        $date->setTimezone($time);
        $y=$date->format('Y');
        $m=$date->format('F');
        $my = $m." ".$y;
        $monthly=Monthlyattendence::where('month_year',$my)->get();
        if(count($monthly)>0)
        {
            return redirect('admin/attendence');
        }
        else{
            $stu=Student::all();
            foreach($stu as $value)
            {
                $monthlyAttendence= new Monthlyattendence();
                $monthlyAttendence->name=$value->name;
                $monthlyAttendence->rollno=$value->rollno;
                $monthlyAttendence->total=0;
                $monthlyAttendence->percentage=0;
                $monthlyAttendence->month_year= $my;
                $monthlyAttendence->save();
            }
            return redirect('admin/attendence');
        }
    }
}
