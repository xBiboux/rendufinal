<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Twitter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="javascript.js"></script>
</head>

<body>
  <?php require_once '../header.template.php'; ?>


  <main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- <h1><?php // echo "Bonjour, $prenom $nom" 
    ?></h1> -->
    <img src="../twitter.avif" class="oiseau">
    <h1>Tweets:</h1>
    <br>
    <br>
    <?php foreach ($article as $article): ?>
      <h3>
        <?php echo $article['titre'] ?>
      </h3>
      <br>
      <p>
        <?php echo $article['contenu'] ?>
      </p>
      <p>
        <br>
        <?php echo "Écrit à " . date("d/m/Y", strtotime($article['date'])) .
          " à " . date("H:i", strtotime($article['date'])) ?>
      </p>
      <br>
      <form action="delete.php" method="POST">
          <input type="hidden" name="form" value="form_supp_article">
          <input type="hidden" name="id" value="<?php echo $article['id'] ?>">
          <input type="submit" value="Supprimer">
    </form>
    <div class="grid">
    <?php endforeach; ?>
    <article>
    <h2>Faire un tweets</h2>
    <form action="ajout.php" method="POST">
      <input type="hidden" name="form" value="formulaire_ajout_article">
      <label for="titre">Titre:</label>
      <br>
      <input type="text" name="titre" id="titre">
      <br>
      <label for="contenu">Contenu:</label>
      <br>
      <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
      <br>
      <label for="tag">tag:</label>

      <select name="tag" id="tag">
      <option value="choix">Choisir un tag</option>
      <option value="politique">politique</option>
      <option value="sport">sport</option>
      <option value="culture">culture</option>
      <option value="jv">jeux video</option>
      </select>
      <br>
      <input type="submit" value="Envoyer">
    </form>
      </article>
  </main>
  <?php require_once '../footer.template.php'; ?>
    </div>
</body>

</html>