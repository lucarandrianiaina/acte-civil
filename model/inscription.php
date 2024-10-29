<?php
include_once 'connexion.php';
$msg = '';
if(isset($_POST['envoi'])){
      if($_POST['mdp'] == $_POST['mdp1']){
            $nom = $_POST['nom'];
            $mail = $_POST['mail'];
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            // var_dump($mdp);
            $sql = "INSERT INTO utilisateur (nom_u,mail_u,password) VALUES (?,?,?)";
            $stmt = $connexion->prepare($sql);
            $result = $stmt->execute(array($nom,$mail,$mdp));
            header('location:../vue/login.php');
      }else{
            $msg = 'confirmer le mots de passe';
      }
}
?>