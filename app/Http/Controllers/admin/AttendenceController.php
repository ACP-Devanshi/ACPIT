<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Monthlyattendence;

class AdminattendenceController extends Controller
{
    public function index()
    {
        $data=Monthlyattendence::all();
        $data=compact('data');
        return view('admin/certificate')->with($data);
    }
}
