<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('layout.navpetugas')


<div class="container">
     
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TANGGAL</th>
      <th scope="col">NIK</th>
      <th scope="col">LAPORAN</th>
      <th scope="col">FOTO</th>
      <th scope="col">STATUS</th>
      <th scope="col">UBAH</th>
      
      
    
    </tr>
  </thead>
  
  <tbody>
    @foreach ($pengaduan as $pengaduan)
    <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td>{{$pengaduan->nik}}</td>
      <td>{{$pengaduan->isi_laporan}}</td>
      <td> <img src='{{asset("storage/image/" .$pengaduan->foto)}}' width= "140px" style= "border-radius: 15px"/></td>
      <td>{{$pengaduan->status}}</td>
      <td>
       
        <a href="detail-tanggapan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-warning">tanggapi</button></a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>



</body>
</html>