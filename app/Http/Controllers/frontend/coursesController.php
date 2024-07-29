<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class coursesController extends Controller
{
    public function diploma()
    {
        return view('frontend/diploma');
    }

    public function bachelor()
    {
        return view('frontend/bachelor');
    }

    public function webDevelopment()
    {
        return view('frontend/webDevelopment');
    }

    public function basic()
    {
        return view('frontend/basic');
    }

    public function nielit()
    {
        return view('frontend/nielit');
    }


}
