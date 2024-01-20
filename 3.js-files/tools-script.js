//------------------------Variable-----------------------//

const toolsTab = document.querySelectorAll(".tool-tab");
const tools = document.querySelectorAll(".tool-container");

//-------------------Script-----------------------------//
toolsTab.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tools.forEach((tool) => {
      tool.classList.toggle("hide");
    });
  });
});
