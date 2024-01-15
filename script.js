//--------------------- BENEF CALCULATOR----------------------//

let getBenefice = calcul_btn.addEventListener("click", (e) => {
  let gazPrice = document.getElementById("gas_price").value;
  let maxTank = 42;
  let priceFullTank = gazPrice * maxTank;
  let distanceMax = 900;
  let priceByDistance = priceFullTank / distanceMax;
let getBenefice = calcul_btn.addEventListener("click", (e) => {
  let gazPrice = document.getElementById("gas_price").value;
  let maxTank = 42;
  let priceFullTank = gazPrice * maxTank;
  let distanceMax = 900;
  let priceByDistance = priceFullTank / distanceMax;
)}

  const taxesInput = document.getElementById("taxes").value;
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

//--------------------------- nav

const nav_btn_open = document.getElementById("nav-btn-open");
const nav_btn_close = document.getElementById("nav-btn-close");
const nav_opened = document.querySelector(".nav-opened");
const nav_closed = document.querySelector(".nav-closed");

nav_closed.style.display = "none";
nav_btn_close.addEventListener("click", () => {
  nav_closed.style.display = "block";
  nav_opened.style.display = "none";
});
nav_btn_open.addEventListener("click", () => {
  nav_closed.style.display = "none";
  nav_opened.style.display = "block";
});
nav_btn_open.style.display = "none";

// -------------Create account---------

const createAccountBtn = document.querySelector(".create_account_btn");
const registerContainer = document.querySelector(".register-form-container");

createAccountBtn.addEventListener("click", () => {
  registerContainer.classList.toggle("hidding");
});
