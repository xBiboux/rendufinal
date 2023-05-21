<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Twitter</title>
</head>

<body>
  <?php require_once 'header.template.php'; ?>


  <main>
    <!-- <h1><?php // echo "Bonjour, $prenom $nom" 
    ?></h1> -->
    <img src="twitter.avif" class="oiseau">
    <form action="user.php" method="POST">
              <input type="hidden" name="form" value="formulaire_ajout_user">
              <article>
              <h2>Connexion</h2>
              <br>
              <label for="user_prenom">Prénom:</label>
              <br>
              <input type="text" name="user_prenom" id="user_prenom"> 
              <br>
              <label for="user_nom">Nom:</label>
              <br>
              <input type="text" name="user_nom" id="user_nom">
              <br>
              <label for="user_pseudo">Pseudo:</label>
              <br>
              <input type="text" name="user_pseudo" id="user_pseudo">
              <br>
              <label for="user_email">Adresse email:</label>
              <br>
              <input type="text" name="user_email" id="user_email">
              <br>
              <label for="user_password">Mot de passe:</label>
              <br>
              <input type="password" name="user_password" id="user_password">
              <br>
              <input type="submit" value="Envoyer" class="button_submit">
              </article>
            </form>
  </main>
  <?php require_once 'footer.template.php'; ?>
</body>

</html>