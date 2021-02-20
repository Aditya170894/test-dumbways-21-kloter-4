function myFunction() {
    let togglePassword = document.getElementById('togglePassword');
    let password = document.getElementById('password');
    if (password.type === 'password') {
      password.type = 'text';
      togglePassword.src = './assets/image/eye-crossed.png';
    } else {
      password.type = 'password';
      togglePassword.src = './assets/image/eye-open.png';
    }
  }