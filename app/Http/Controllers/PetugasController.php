<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\models\Pengaduan;
class PetugasController extends Controller
{
    
    function daftar_petugas(request $request){

        $nama_petugas = $request->nama_petugas;
        $username = $request->username;
        $password = $request->password;
        $telp_petugas = $request->telp_petugas;
      
       
        $masyarakat = DB::table('petugas')->insert([
            
            'nama_petugas' => $nama_petugas,
            'username' => $username,
            'password' => Hash::make ($password),
            'telp_petugas' => $telp_petugas,
            
        ]);

        return redirect('/logpetugas');
    }

    function data_petugas(request $request){
        $hi = "Data petugas di App Pengaduan Masyarakat";
        $petugas =  DB::table('petugas')->get();

        return view('data-petugas',['petugas'=>$petugas, 'hi'=>$hi]);


    }
    function halog(){
        return view ("logpetugas");
    }
    function proses_login(request $request){
        $datalogin = $request->only("username","password");
        if (Auth::guard("petugas")->attempt($datalogin)){
            return redirect('/halpetugas');
        }else{
            return redirect ('/logpetugas')->with("salah","password salah");

        }




    }
    function halpetugas(){
        $pengaduan = pengaduan::All();
        $pengaduan = DB::table('pengaduan')->get();
        return view('halpetugas',['pengaduan'=>$pengaduan]);

     

    }
    function detail_tanggapan($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan','=', $id )->first();
        $tanggapan = DB::table('tanggapan')->where('id_pengaduan','=', $id )->first();
        return view('detail-tanggapan',['pengaduan'=>$pengaduan,'tanggapan'=>$tanggapan]);
    }


}


