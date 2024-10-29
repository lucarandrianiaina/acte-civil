<?php
include_once 'connexion.php';
if(isset($_POST['envoi'])){
      if (isset($_POST['nom']) && isset($_POST['mdp'])) {
            $nom = $_POST['nom'];
            $mdp = $_POST['mdp'];
            $sql = "SELECT * FROM utilisateur WHERE nom_u = ?";
            $stmt = $connexion->prepare($sql);
            $stmt->execute(array($nom));
            $utilisateur = $stmt->fetch();
            if ($utilisateur && password_verify($mdp, $utilisateur['password'])) {
                  $_SESSION['utilisateur'] = $utilisateur['id_u'];
                  header('Location: ../vue/index.php');
              } else {
                  $_SESSION['message']['text'] = "mots de passe incorrecte";
                  $_SESSION['message']['type'] = "danger";
                  header('Location: ../vue/login.php.php');
              }
      }
}
?>