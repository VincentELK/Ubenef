// ---------------------Variable-------------------//
//------------------Form-----------------------//
const login_form = document.getElementById("login-form");
const signup_form = document.getElementById("signup-form");
//-----------------Input-----------------------//
const email_login = document.getElementById("email-login");
const password_login = document.getElementById("password-login");
const login_form_btn = document.getElementById("login-form-btn");

//-----------------------Script--------------------//

login_form.addEventListener("submit", (e) => {
  e.preventDefault();
});
signup_form.addEventListener("submit", (e) => {
  e.preventDefault();
});
