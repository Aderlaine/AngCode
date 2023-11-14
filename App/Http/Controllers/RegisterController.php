<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        $validatedData = $request -> validate([
            'username' => 'required| min:5|max:30|unique:users' ,
            'password' => 'required|min:8|max:50',
            'passwordConfirmation' => 'required|same:password',
            'email' => 'required|email:dns|unique:users',
            'birth' =>'required|date|before:' . now()->toDateString(),
            'applicant_category' => '',
            'content_creator' => ''
        ]);
         $username = $request->input('username');
        User::create($validatedData);
        
        return redirect('/login')->with('status', "Helloo <strong>$username</strong>! You Are Successfully Registered!!! Please Login To see the content!!");
    }
}
