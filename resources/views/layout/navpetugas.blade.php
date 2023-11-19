<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
   @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Asap+Condensed:wght@200;300;500;600&family=Bebas+Neue&display=swap');
      body{
        font-family: "Asap Condensed";
      }
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}

    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #033E3E">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me">
          <li>
            <a class="nav-link active" aria-disabled="true" href="/halpetugas" style="font-size: 20px ;"><b style=" color:#FFFF ">halaman</b><span >petugas</span></a>
          </li>
        </ul>
<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
  
    <li class="nav-item">
        <a class="nav-link active" href="/halpetugas" tabindex="-1" aria-disabled="true"><b>home</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/data-masyarakat"><b>data masyarakat</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="data-petugas" tabindex="-1" aria-disabled="true"><b>data petugas</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/logout" tabindex="-1" aria-disabled="true"><b>logout</b></a>
    </li>


</ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-button">
              <a href="/logpetugas" class="btn"  tabindex="-1" aria-disabled="true" style="background-color:#000000; color:white; margin:2px"><b>Login</b></a>          
          </li>
          <li class="nav-button">
              <a href="/petugas"  class="btn"  tabindex="-1" aria-disabled="true"  style="background-color:#000000; color:white; margin:2px"><b>Register</b></a>
          </li>
      </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>