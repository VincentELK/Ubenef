//-------------------------------Variable----------------------//
const home_li = document.getElementById("home_li");
const tools_li = document.getElementById("tools_li");

// ------------------------------Script------------------------//
tools_li.addEventListener("click", () => {
  window.open("tools.html", "_self");
});

home_li.addEventListener("click", (e) => {
  window.open("index.html", "_self");
});
