// for login password
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye');
});

// for signup password
const signupPassword = document.querySelector('#toggleSignupPassword');
  const signup_password = document.querySelector('#signup_password');

  signupPassword.addEventListener('click', function (e) {
    const type = signup_password.getAttribute('type') === 'password' ? 'text' : 'password';
    signup_password.setAttribute('type', type);
    this.classList.toggle('fa-eye');
});

// for signup confirm password
const signupConfirmPassword = document.querySelector('#toggleSignupconPassword');
  const signup_confirm_password = document.querySelector('#signup-confirm_password');

  signupConfirmPassword.addEventListener('click', function (e) {
    const type = signup_confirm_password.getAttribute('type') === 'password' ? 'text' : 'password';
    signup_confirm_password.setAttribute('type', type);
    this.classList.toggle('fa-eye');
});

// for forgot new password
const forgotPassword = document.querySelector('#toggle_new_forgot_pass');
  const forgot_new_password = document.querySelector('#new_forgot_pass');

  forgotPassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = forgot_new_password.getAttribute('type') === 'password' ? 'text' : 'password';
    forgot_new_password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye');
});

// for forgot confirm password
const forgotConfirmPassword = document.querySelector('#toggle_confirm_forgot_pass');
  const forgot_confirm_password = document.querySelector('#confirm_forgot_pass');

  forgotConfirmPassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = forgot_confirm_password.getAttribute('type') === 'password' ? 'text' : 'password';
    forgot_confirm_password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye');
});