//------------------------Variable-----------------------//
const ubenefTab = document.getElementById('ubenef_tab');
const uweatherTab = document.getElementById('weather_tab');

const ubenefTool = document.querySelector(".calcul-form");
const uweatherTool = document.querySelector(".weather-tool")


let toolsArray = [ubenefTool, uweatherTool];
let tabsToolArray = [ubenefTab, uweatherTab];


ubenefTab.addEventListener('click', () => {
  ubenefTool.classList.add('hide')
  ubenefTool.classList.toggle('show')

  uweatherTool.classList.add('hide')
  uweatherTool.classList.remove('show')
})
uweatherTab.addEventListener('click', () => {
  uweatherTool.classList.add('hide')
  uweatherTool.classList.toggle('show')

  ubenefTool.classList.add('hide')
  ubenefTool.classList.remove('show')
})
//-------------------Script-----------------------------//
