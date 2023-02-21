<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LAMP Helm Stack</title>
</head>
<body>
  <h1>LAMP Helm Stack</h1>
  <a href="infos.php">Informations PHP</a>
  <h2>
    <?php
      if (isset($_SESSION["username"])) {
        echo "Connecté en tant que " . $_SESSION["username"];
      } else {
        echo "Vous êtes déconnecté";
      }
    ?>
  </h2>
  <form action="auth.php" method="post">
    <fieldset>
      <legend>Formulaire de test</legend>
      <label for="input-username">
        Nom d'utilisateur
      </label>
      <input type="text" id="input-username" name="input-username">
      <br>
      <label for="input-password">Mot de passe</label>
      <input type="password" name="input-password" id="input-password">
      <br>
      <input type="submit" value="Envoyer">
    </fieldset>
  </form>
</body>
</html>