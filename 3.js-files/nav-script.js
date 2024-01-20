//-------------------------------Variable----------------------//
const home_li = document.getElementById("home_li");
const tools_li = document.getElementById("tools_li");

// ------------------------------Script------------------------//
tools_li.addEventListener("click", () => {
  window.open("1.tools.html", "_self");
});

home_li.addEventListener("click", () => {
  window.open("1.home.html", "_self");
});
console.log(home_li);
