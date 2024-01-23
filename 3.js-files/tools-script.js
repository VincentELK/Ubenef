//------------------------display script Variables-----------------------//
const ubenefTab = document.getElementById('ubenef_tab');
const uweatherTab = document.getElementById('weather_tab');
const ubenefTool = document.querySelector(".calcul-form");
const uweatherTool = document.querySelector(".weather-tool")
let toolsArray = [ubenefTool, uweatherTool];
let tabsToolArray = [ubenefTab, uweatherTab];

//----------------------- Ubenef Script Variables ----------------//
const ubenefContainer = document.querySelector("ubenef-container");
const calcul_btn = document.getElementById("calcul_btn");
//------------------------Uweather Variables---------------------//

//-------------------display Script-----------------------------//
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
//-------------------End of display Script-----------------------------//
//-------------------Ubenef Script----------------------------//

let getBenefice = calcul_btn.addEventListener("click", (e) => {
  let gazPrice = document.getElementById("gas_price").value
  let maxTank = 70;
  let priceFullTank = gazPrice * maxTank;
  let distanceMax = 900;
  let priceByDistance = priceFullTank / distanceMax;

  const taxesInput = document.getElementById("taxes").value
  const racePrice = document.getElementById("race_price").value;
  const userTrip = document.getElementById("distance_traveled").value;
  const bonus = document.getElementById("bonus").value;
  const benefice = document.getElementById("benefice");
  const taxesPercentage = taxesInput / 100;
  const userTripCost = priceByDistance * userTrip;

  let result =
    racePrice * (1 - taxesPercentage) - userTripCost + parseInt(bonus);

  document.getElementById("benefice").textContent = result.toFixed(2);

  e.preventDefault();
});

//--------------------------Uweather Script------------------------//
const weatherApiKey = "feaa554e24d5bd9c962d7e719ac79475"
const apiUrl = "https://api.openweathermap.org/data/2.5/weather?units=metric&q="

const searchBox = document.querySelector(".search input");
const searchBtn = document.querySelector(".search button");
const weatherIcon = document.querySelector(".weather-icon");


async function checkWeather(city) {


  const response = await fetch(apiUrl + city + `&appid=${weatherApiKey}`)
  let data = await response.json();

  if (response.status == 404) {
    document.querySelector(".error").style.display = "block"
    document.querySelector(".weather").style.display = "none"
  } else {
    document.querySelector(".city").innerHTML = data.name;
    document.querySelector(".temp").innerHTML = Math.round(data.main.temp) + "°C";

    if (data.weather[0].main == "Clouds") {
      weatherIcon.src = "0.Assets/uweather-icons/clouds.png";
    }
    else if (data.weather[0].main == "Clear") {
      weatherIcon.src = "0.Assets/uweather-icons/clear.png";
    }
    else if (data.weather[0].main == "Rain") {
      weatherIcon.src = "0.Assets/uweather-icons/rain.png";
    }
    else if (data.weather[0].main == "Drizzle") {
      weatherIcon.src = "0.Assets/uweather-icons/drizzle.png";
    }
    else if (data.weather[0].main == "Mist") {
      weatherIcon.src = "0.Assets/uweather-icons/mist.png";
    }

    document.querySelector(".weather").style.display = "block"
    document.querySelector(".error").style.display = "none"
  }

}

searchBtn.addEventListener('click', () => {

  checkWeather(searchBox.value);
})
