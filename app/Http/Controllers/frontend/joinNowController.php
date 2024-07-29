<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JoinNow;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class joinNowController extends Controller
{
    public function index()
    {
        return view('frontend/joinNow');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // print_r($request->input('course'));
        // die("check");
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'course' => 'required',
        ]);

        // Check for unique email in the 'contact' table
        $request->validate([
            'email' => 'unique:join_now,email',
        ]);
        $courseArray = $request->input('course');
        $serializedData = json_encode($courseArray);
        $data=new JoinNow;
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->course=$serializedData;
        $data->save();
        // $email=$request->input('email');
        // $phone=JoinNow::where('email',$email)->select('phone')->first();
        // $details=[
        //     'title'=>"New notification for join course",
        //     'body'=>$phone
        // ];
        // Mail::to('devanshisrivastava412@gmail.com')->send();
        return redirect('/joinNow')->with('status','save successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
