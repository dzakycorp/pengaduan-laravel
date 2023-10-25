<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    function index(){
      return view("/login");
    }
    function login(request $request){
        if(Auth::attempt($request->only("username","password"))){
           return redirect("/home");
        }else{
            return redirect("/login")->with("Error","passowrd salah");
        }
    }
    function logout(){
        Auth::logout();

        return redirect("/login");
    }






}
