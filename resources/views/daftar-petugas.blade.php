<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:  #033E3E;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
        }

        .register-container h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin: 10px 0;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 375px;
            height:20px ;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 7px;
        }

        .form-group button {
            width: 100%;
            background-color:  #033E3E;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 7px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color:  #033E3E;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>DAFTAR PETUGAS</h2>
        <form action="/petugas" method="post">
        @method('post')
        @csrf
            <div class="form-group">
                <label for="nama">Nama petugas</label>
                <input type="text" id="nama_petugas" name="nama_petugas" required>
            </div>
            <div class="form-group">
                <label for="email">username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="telepon">nomor telepon</label>
                <input type="text" id="telp_petugas" name="telp_petugas" required>
            </div>
           
            <div class="form-group">
                <button type="submit">Daftar</button>
            </div>
        </form>
    </div>
</body>
</html>
