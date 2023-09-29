

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <title>Connexion</title>
  </head>
  <body>
    <header>
      <button class="back-arrow">
        <a href="./index.php">
          <ion-icon name="arrow-back-outline" class="arrow"></ion-icon>
        </a>
      </button>
      <div class="logo" id="head_logo">
        <img src="Logo Sites/UBENEF'.jpg" />
      </div>
      <br />
      <div class="title-form">
        <hr class="tr_header" />
        <h2>Connexion</h2>
        <hr class="tr_header" />
      </div>
    </header>
    <div class="form-container">
      <form method="post" action="requester.php" class="form">
        <div>
          <button class="back-home">
            <a href="index.php">X</a>
          </button>
        </div>
        <label for="email">Adresse mail</label>
        <br />
        <input type="email" id="email" name="email" />
        <br />
        <label for="password">Mot de passe</label>
        <br />
        <input type="password" id="password" name="password" />
        <br />
        <button type="submit">Se connecter</button>
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