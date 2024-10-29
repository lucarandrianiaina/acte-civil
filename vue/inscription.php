
<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="..\public\bootstrap-5.3.2\dist\css\bootstrap.min.css">
      <title>inscription utilisateur</title>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary m-5 p-5">
<main class="form-signin w-50 m-auto p-5">  
      <form action="../model/inscription.php" method="post">
      <h1 class="h3 mb-3 fw-normal text-center">S'inscrire</h1>
            <div class="form-floating my-2">
                  <input type="text" name="nom" id="nom" placeholder="nom d'utilissateur" class="form-control" required>
                  <label for="nom" class="form-label">nom d'utilisateur</label>
            </div>
            <div class="form-floating my-2">
                  <input type="mail" name="mail" id="mail" placeholder="mail d'utilissateur" class="form-control" required>
                  <label for="mail" class="form-label">e-mail d'utilisateur</label>
            </div>
            <div class="form-floating my-2">
                  <input type="password" name="mdp" id="mdp" placeholder="mots de passe" class="form-control" required>
                  <label for="mdp" class="form-label">mots de passe</label>
            </div>
            <div class="form-floating my-2">
                  <input type="password" name="mdp1" id="mdp1" placeholder="confirmer mots de passe" class="form-control" required>
                  <label for="mdp1" class="form-label">confirme mots de passe</label>
            </div>
            <input type="submit" value="inscrire" name="envoi" class="btn btn-primary w-100">
      </form>
</main>
</body>
</html>