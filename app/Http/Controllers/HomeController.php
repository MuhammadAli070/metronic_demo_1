<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    
//  Admin dashboard
    public function dashboard(){
        return view('dashboard');
    }

    public function signIn(){
        return view('auth.signIn');
    }
    public function homePage(){
        return view('home');
    }
 
 
 
    public function sendMail(){
        Mail::to('maligujjar07@gmail.com')->send(new WelcomeMail());
    } 


}
