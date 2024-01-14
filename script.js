//--------------------- BENEF CALCULATOR----------------------//

// let getBenefice = calcul_btn.addEventListener("click", (e) => {
//   let gazPrice = document.getElementById("gas_price").value;
//   let maxTank = 42;
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

//--------------------------- nav

const nav_btn_open = document.getElementById("nav-btn-open");
const nav_btn_close = document.getElementById("nav-btn-close");
const logo_icon = document.querySelector(".nav-logo-icon-container");
const nav_li_home_a = document.querySelector(".home_btn > a");
const nav_li_home_span = document.querySelector(".home_btn > svg");
const nav_li_contact_a = document.querySelector(".contact_btn > a");
const nav_li_contact_span = document.querySelector(".contact_btn > svg");
const nav_li_lorem1_a = document.querySelector(".lorem1_btn > a");
const nav_li_lorem1_span = document.querySelector(".lorem1_btn > svg");
const nav_li_lorem2_a = document.querySelector(".lorem2_btn > a");
const nav_li_lorem2_span = document.querySelector(".lorem2_btn > svg");
const nav_li_login_a = document.querySelector(".login_btn > a");
const nav_li_login_span = document.querySelector(".login_btn > svg");
const nav_li_create_account_a = document.querySelector(
  ".create_account_btn > a"
);
const nav_li_create_account_span = document.querySelector(
  ".create_account_btn > svg"
);
const nav_btn_div = document.querySelector(".nav-btn");
const nav_li_home_div = document.querySelector(".li-container");
nav_btn_open.classList.add("nav-btn-none");

const nav_closed = () => {
  nav_btn_open.classList.remove("nav-btn-none");
  nav_btn_open.classList.add("btn-nav-block");
  nav_btn_close.classList.add("nav-btn-none");
  logo_icon.style.display = "none";
  nav_li_home_a.style.display = "none";
  nav_li_home_span.style.display = "block";
  nav_li_contact_a.style.display = "none";
  nav_li_contact_span.style.display = "block";
  nav_li_lorem1_a.style.display = "none";
  nav_li_lorem1_span.style.display = "block";
  nav_li_lorem2_a.style.display = "none";
  nav_li_lorem2_span.style.display = "block";
  nav_li_login_a.style.display = "none";
  nav_li_login_span.style.display = "block";
  nav_li_create_account_a.style.display = "none";
  nav_li_create_account_span.style.display = "block";
  nav_btn_div.style.padding = "0 0 0 15px";
};
const nav_opened = () => {
  nav_btn_close.classList.remove("nav-btn-none");
  nav_btn_close.classList.add("btn-nav-block");
  nav_btn_open.classList.add("nav-btn-none");
  logo_icon.style.display = "";
  nav_li_home_a.style.display = "";
  nav_li_home_span.style.display = "none";
  nav_li_contact_a.style.display = "";
  nav_li_contact_span.style.display = "none";
  nav_li_lorem1_a.style.display = "";
  nav_li_lorem1_span.style.display = "none";
  nav_li_lorem2_a.style.display = "";
  nav_li_lorem2_span.style.display = "none";
  nav_li_login_a.style.display = "";
  nav_li_login_span.style.display = "none";
  nav_li_create_account_a.style.display = "";
  nav_li_create_account_span.style.display = "none";
  nav_btn_div.style.padding = "0 0 0 25%";
};

nav_btn_close.addEventListener("click", () => {
  nav_closed();
});
nav_btn_open.addEventListener("click", () => {
  nav_opened();
});

// -------------Create account---------

const createAccountBtn = document.querySelector(".create_account_btn");
const registerContainer = document.querySelector(".register-form-container");

createAccountBtn.addEventListener("click", () => {
  registerContainer.classList.toggle("hidding");
});
