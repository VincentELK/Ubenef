//------------------------Variable----------------------------

const ubenefTab = document.getElementById("ubenef-tab");
const ubenefContainer = document.querySelector("ubenef-container");

const home_li = document.getElementById("home-li");
const tools_li = document.getElementById("tools-li");

const calcul_btn = document.getElementById("calcul_btn");

//------------------Global Function---------------------

//---------------------UBENEF DISPLAY------------------------
// ubenefContainer.classList.toggle("hide");
// ubenefTab.addEventListener("click", () => {
//   ubenefContainer.classList.toggle("hide");
// });

// ------------------Global Function---------------------

// // --------------------- UBENEF CALCULATOR----------------------
// let getBenefice = calcul_btn.addEventListener("click", (e) => {
//   let gazPrice = document.getElementById("gas_price").value;
//   let maxTank = 70;
//   let priceFullTank = gazPrice * maxTank;
//   let distanceMax = 900;
//   let priceByDistance = priceFullTank / distanceMax;

//   const taxesInput = document.getElementById("taxes").value;
//   const racePrice = document.getElementById("race_price").value;
//   const userTrip = document.getElementById("distance_traveled").value;
//   const bonus = document.getElementById("bonus").value;
//   const benefice = document.getElementById("benefice");
//   const taxesPercentage = taxesInput / 100;
//   const userTripCost = priceByDistance * userTrip;

//   let result =
//     racePrice * (1 - taxesPercentage) - userTripCost + parseInt(bonus);

//   document.getElementById("benefice").textContent = result.toFixed(2);

//   e.preventDefault();
// });

// -------------Create account------

tools_li.addEventListener("click", () => {
  window.open("tools.html", "_self");
});

home_li.addEventListener("click", (e) => {
  window.open("index.html", "_self");
});
