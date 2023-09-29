<!DOCTYPE html>
<html lang="fr, eng">
  <head>
    <link rel="stylesheet" href="index.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ubenef'</title>
  </head>
  <body>
    <header>
      <div class="logo" id="head_logo">
        <img src="./Logo Sites/UBENEF'.jpg" />
      </div>
      <ul class="create_login_btn_list">
        <li>
          <button class="profil_btn">
            <a href="./Profil/profil.php">My profile</a>
          </button>
        </li>
        <li class="create_account">
          <button class="create_btn" id="create_account_btn">
            <a href="./inscription/inscription.php">Register</a>
          </button>
        </li>
        <li>
          <button class="login_btn" id="login_button">
            <a href="./connexion.php" class="login">Login</a>
          </button>
        </li>
      </ul>
      <div class="resume">
        <hr class="tr_header" />
        <ul class="resume_list">
          <li>Calculate your profit.</li>
          <li>quickly.</li>
          <li>easily.</li>
          <li>precisely.</li>
        </ul>

        <hr class="tr_header" />
      </div>
    </header>

    <section class="info_section">
      <div class="calcul_main_container">
        <form action="" class="calcul_form_main">
          <label for="race_price">Price of the fare</label>
          <br />
          <input
            type="number"
            id="race_price"
            min="0"
            name="price"
            step="0.10"
          />
          <br />
          <label for="gas_price">Gas Price</label>
          <br />
          <input type="number" id="gas_price" step="0.01" min="0" />
          <br />
          <label for="distance_traveled">Distance covered(km)</label>
          <br />
          <input type="number" id="distance_traveled" min="0" />
          <br />
          <label for="taxes">URSAFF/IRS/... amount(%)</label>
          <br />
          <input type="number" id="taxes" min="0" value="22" />
          <br />
          <label for="bonus">Bonus/Tips</label>
          <br />
          <input type="number" min="0" id="bonus" value="0" />
          <br />
          <input id="calcul_btn" type="submit" value="Calculate my profit" />
          <br />
          <p>Your profit</p>
          <div class="result_container">
            <br />
            <div id="benefice" class="result_input"></div>
          </div>
        </form>
      </div>
      <div class="ranking" id="delivery_ranking">
        <div class="Deliveries_Ranking">
          <h2>Week Deliveries Ranking</h2>
          <div class="total_delivery_container">
            <h3>Total of deliveries :</h3>
            <p id="total_delivery_number"></p>
          </div>
          <div>
            <h3>Best delivrer :</h3>
            <p id="best_delivery_prsn"></p>
          </div>
        </div>

        <div class="Turnover_Ranking">
          <h2>Week Turnover Ranking</h2>
          <div>
            <h3>Total of Turnover :</h3>
            <p id="total_turnover"></p>
          </div>
          <div>
            <h3>Best Turnover :</h3>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="footer-div">
        <ul class="footer-li">
          <li><a href="#">Contact</a></li>
          <li><a href="#">Conditions d'utilisations</a></li>
          <li><a href="#">Copyright</a></li>
        </ul>
      </div>
    </footer>
    <script src="index.js"></script>
  </body>
</html>
