<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\hash;
use Illuminate\Support\facades\Auth;

class Authcontroller extends Controller
{
    function register()
    {
        return view('/regis ');
    }
    function store(Request $request)
    {
        DB::table('masyarakat')->insert([
            'nik'=> $request->nik,
            'nama'=> $request->nama,
            'username'=> $request->username,
            'password'=> Hash::make($request->password),
            'telp'=> $request->telp
        ]);
        return redirect("/login");
    }
        function logout(){
            Auth::logout();

            return redirect('/login');


        }
       

}  

    
