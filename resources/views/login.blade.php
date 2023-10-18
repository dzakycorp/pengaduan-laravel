<!DOCTYPE HTML>
<div class="login-page">
<link rel="stylesheet" href="css/login.css">
  <div class="form">
  <p class="login-text" style="font-size: 2rem; font-weight: 350;">LOGIN</p>
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form action ="konlog.blade.php" method="POST" class="login-form">
      <input type="text" placeholder="username" name ="username"/>
      <input type="password" placeholder="password" name ="password"/>
      <a href=""><button type ="submit">login</button></a>
      <p class="message">belum punya akun? <a href="register.php">buat akun</a></p>
    </form>
  </div>
</div>