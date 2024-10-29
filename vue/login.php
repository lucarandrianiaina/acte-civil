
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="..\public\bootstrap-5.3.2\dist\css\bootstrap.min.css">
      <title>login</title>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary m-5 p-5">
<main class="form-signin w-50 m-auto p-5">    
      <form action="../model/login.php" method="post">
            <h1 class="h3 mb-3 fw-normal text-center">Se connecter</h1>
            <div class="form-floating my-2">
                  <input class="form-control" type="text" name="nom" id="nom" placeholder="nom d'utilissateur" required>
                  <label for="nom" class="form-label">nom d'utilisateur</label>
            </div>
            <div class="form-floating">
                  <input class="form-control mb-2" type="password" name="mdp" id="mdp" placeholder="mots de passe" required>
                  <label for="mdp" class="form-label">mots de passe</label>
            </div>
            <input type="submit" value="Connexion" name="envoi" class="btn btn-primary w-100 py-2">
            <?php
            if (!empty($_SESSION['message']['text'])) {
                ?>
                    <div class="alert <?= $_SESSION['message']['type'] ?>">
                        <?= $_SESSION['message']['text'] ?>
                    </div>
                <?php
                }
                ?>
      </form>
      <a href="inscription.php" class="btn btn-primary my-3">Créer un compte</a>
      <a href="#" class=" my-3 mx-5">j'ai oublier mon mots de passe</a>
</main>
</body>
</html>