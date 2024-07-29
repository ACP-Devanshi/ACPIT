<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $existingAdmin = User::all();
       
        if (!$existingAdmin->isEmpty()) {
         
            $status = "An admin account has already been registered. Only one admin account is permitted.";
            $count = 1;
            $data = compact('count','status');
            return redirect('/admin')->with($data);
        }
        else{
       
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'admin' => true, // Assuming you have a field to mark admin accounts
            ]);
        
            event(new Registered($user));
        
            Auth::login($user);
        }
        // Create a new admin account
       
    
        return redirect(RouteServiceProvider::HOME);
    }
}
