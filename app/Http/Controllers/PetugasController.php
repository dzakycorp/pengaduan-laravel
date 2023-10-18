<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PetugasController extends Controller
{
    function daftar_petugas(request $request){

        $nama = $request->nama;
        $user = $request->un;
        $pass = $request->pass;
        $telp = $request->telp;
        $level =$request->level;
        $masyarakat = DB::table('petugas')->insert([
            
            'nama_petugas' => $nama,
            'username' => $user,
            'password' => $pass,
            'telp' => $telp,
            'level' => $level
        ]);

        return redirect('/login');
    }

    function data_petugas(request $request){
        $hi = "Data petugas di App Pengaduan Masyarakat";
        $petugas =  DB::table('petugas')->get();

        return view('data-petugas',['petugas'=>$petugas, 'hi'=>$hi]);


    }
}


