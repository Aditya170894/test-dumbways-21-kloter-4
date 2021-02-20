<?php
require 'functions.php';

if (isset($_POST["login"])) {

  login($_POST);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
  <div class="container">
    <form class="form-container" method="POST" >
      <p class="text2">
        DW Cars
      </p>
      <p class="text3">
        The place where you get your best cars, we provide the best cars with the best prices!
      </p>
      <?php if (isset ($error)):?>
        <p style ="color : red;font_style:italic;">Email/Password salah</p>
        <?php endif; ?>
      <div class="form-input">

        <div class="login-input">
          <img src="./assets/image/mail.png" class="login-label">
          <input type="email" id="email" placeholder="Enter your email" name="email">
        </div>
        <div class="login-input">
          <img src="./assets/image/lock.png" class="login-label">
          <input type="password" id="password" placeholder="Enter your password" name ="password">
          <img src="./assets/image/eye-open.png" class="login-label eye" id="togglePassword" onclick="myFunction()">
        </div>
        <a href="./forgot.html" class="forgot-password">
          <p>Forgot password?</p>
        </a>
        <button type="submit" class="btn-1" name = "login">Login
        </button>
        <footer class="sign-up">
          <span>
            Don’t have an account? Let’s
          </span>
          <a href="./signup.php">Sign Up</a>
        </footer>
      </div>
    </form>
  </div>
  <script src="./assets/js/main.js"></script>
</body>
</html>