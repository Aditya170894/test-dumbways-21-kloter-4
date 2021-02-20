<?php
require 'functions.php';

if (isset($_POST["signup"])) {

  signup($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="./assets/css/signup.css">
</head>
<body>
  <div class="container">
    <form class="form-container" method="POST">
      <p class="text2">
        DW Cars
      </p>
      <p class="text3">
        The place where you get your best cars, we provide the best cars with the best prices!
      </p>
      <div class="form-input">
        <div class="login-input">
          <img src="./assets/image/user.png" class="login-label">
          <input type="text" id="text" placeholder="Enter your username" name="name">
        </div>
        <div class="login-input">
          <img src="./assets/image/mail.png" class="login-label">
          <input type="email" id="email" placeholder="Enter your email" name="email">
        </div>
        <div class="login-input">
          <img src="./assets/image/lock.png" class="login-label">
          <input type="password" id="password" placeholder="Enter your password" name="password">
          <img src="./assets/image/eye-open.png" class="login-label eye" id="togglePassword" onclick="myFunction()">
        </div>
        <button type="submit" name="signup" class="btn-1">Sign Up
</button>
        <footer class="sign-up">
          <span>
            Already have an account? Let’s
          </span>
          <a href="./login.php">Login</a>
        </footer>
      </div>
    </form>
  </div>
  <script src="./assets/js/main.js"></script>
</body>
</html>