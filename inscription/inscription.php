<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../index.css" />
    <title>Inscription</title>
  </head>
  <body>
    <header>
      <button class="back-arrow">
        <a href="../index.php">
          <ion-icon name="arrow-back-outline" class="arrow"></ion-icon>
        </a>
      </button>
      <div class="logo" id="head_logo">
        <img src="../Logo Sites/UBENEF'.jpg" />
      </div>
      <br />
      <div class="title-form">
        <hr class="tr_header" />
        <h2>Inscription</h2>
        <hr class="tr_header" />
      </div>
    </header>
    <div class="form-container">
      <form method="post" action="index.php" class="form">
        <div>
          <button class="back-home">
            <a href="../index.php">X</a>
          </button>
        </div>
        <label for="username">Nom d'utilisateur</label>
        <br />
        <input type="text" id="username" name="user" />
        <br />
        <label for="email">Adresse mail</label>
        <br />
        <input type="email" id="email" name="email" />
        <br />
        <label for="password">Mot de passe</label>
        <br />
        <input type="password" id="password" name="password" />
        <br />
        <label for="confirm-password">Confirmez le mot de passe</label>
        <br />
        <input
          type="password"
          id="confirm-password"
          name="confirmed_password"
        />
        <br />
        <label for="main-town">Ville principale</label>
        <br />
        <input type="text" id="main-town" name="main_town" />
        <br />
        <label for="main-vehicle">Vehicule de livraison</label>
        <br />
        <select id="main-vehicle" name="vehicle">
          <option value="">> - - -Choisir une option- - - <</option>
          <option value="voiture">Voiture</option>
          <option value="scooter">Scooter</option>
          <option value="velo">Vélo</option>
          <option value="trottinette">Trottinette</option>
          <option value="gyroroue">Gyroroue</option>
        </select>
        <br />
        <button type="submit">Créer mon compte</button>
      </form>
    </div>
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