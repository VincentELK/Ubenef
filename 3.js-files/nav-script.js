//-------------------------------Variable----------------------//
const home_li = document.getElementById("home_li");
const tools_li = document.getElementById("tools_li");
const log_li = document.querySelectorAll(".log-nav > .li-container");
// ------------------------------Script------------------------//
tools_li.addEventListener("click", () => {
  window.open("1.tools.html", "_self");
});

home_li.addEventListener("click", () => {
  window.open("1.home.html", "_self");
});

log_li.forEach(function (bouton) {
  bouton.addEventListener("click", function () {
    window.open("1.login-signup.html", "_self");
  });
});
