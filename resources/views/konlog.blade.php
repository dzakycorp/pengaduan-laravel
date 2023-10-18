<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$query=$koneksi->query("SELECT * FROM masyarakat WHERE username= '$username' AND password= '$password'");
$jumlahbaris = $query->rowCount();
$data =$query->fetch();
if($jumlahbaris > 0){
    
    $_SESSION['nik'] = $data ['nik'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['level'] = 'masyarakat';

    header("location:home.blade.php");

}else{
    header("location:login.blade.php");

}
?>