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

const nav_btn = document.getElementById("nav-btn");

nav_btn.addEventListener("click", () => {
  console.log("test");
});
