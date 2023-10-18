<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{asset("bootstrap-5.3.1-dist/css/bootstrap.min.css")}}>

</head>
<body>
@include('layout.navbar')
<br>
<br>
<h2 style= text-align:center>update laporan</h2>
<br>
<div class="container">
  <form action="{{url('/update/$pengaduan->id_pengaduan')}}" method="post" enctype="multipart/form-data" >
    @method("POST")
    @csrf 
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">UPDATE LAPORAN</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" >{{$pengaduan->isi_laporan}}</textarea >

    </div>
    <button type="submit" class="btn btn-outline-warning">Update</button>
</form>
</div>
</body>
</html>