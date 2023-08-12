<?php
  require '../utils/utils.php';
  init_php_session();
  $name = $_COOKIE["pseudo"];
  $vehicule = $_COOKIE["vehicule"];
  $livr = $_COOKIE["livraisons"];
  $ca = $_COOKIE["ca"];
  $dist = $_COOKIE["dist"];
  $city = $_COOKIE["city"];
?>

<!DOCTYPE html>
<html lang="en, fr">
  <head>
    <link rel="stylesheet" href="profil.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil page</title>
  </head>
  <body>
    <header>
      <div class="header-container">
        <button class="back-arrow">
          <a href="../index.html">
            <ion-icon name="arrow-back-outline" class="arrow"></ion-icon>
          </a>
        </button>
      </div>
    </header>
    <div class="profil-container">
      <div class="wrapper">
        <div class="profil-top">
          <div class="profil-image"></div>
        </div>

        <div class="profil-bottom">
          <div class="profil-info">
            <div class="main-info">
              <h3 class="name"><?php echo $name?></h3>
              <p class="vehicle-icon"></p>
            </div>
            <p class="bio-profil">BIO</p>
            <p class="town"><?php echo $city?></p>
          </div>

          <div class="profil-stats-block">
            <div class="stats-item">
              <p class="profil-stats"><?php echo $livr?></p>
              <p class="grey">Deliveries</p>
            </div>
            <div class="stats-item">
              <p class="profil-stats"><?php echo $ca?></p>
              <p class="grey">Turnover</p>
            </div>
            <div class="stats-item">
              <p class="profil-stats"><?php echo $dist?></p>
              <p class="grey">Total distance</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer></footer>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
