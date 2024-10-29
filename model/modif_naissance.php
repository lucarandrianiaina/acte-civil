<?php
include 'connexion.php';
$id = $_POST['id'];
$nom = $_POST['nom'];
$date = $_POST['date_nais'];
$sexe = $_POST['sexe'];
$nom_p = $_POST['nom_p'];
$nom_m = $_POST['nom_m'];
if (
      !empty($_POST['nom'])
      && !empty($_POST['date_nais'])
      && !empty($_POST['sexe'])
      && !empty($_POST['nom_p'])
      && !empty($_POST['nom_m'])
    && !empty($_POST['id'])
) {

$sql = "UPDATE personne SET nom=?,date_nais=?,sexe=?,nom_pere=?,nom_mere=? WHERE id=?";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
      $nom,
      $date,
      $sexe,
      $nom_p,
      $nom_m,
      $id
    ));
    
    if ( $req->rowCount()!=0) {
        $_SESSION['message']['text'] = "personne modifié avec succès";
        $_SESSION['message']['type'] = "success";
    }else {
        $_SESSION['message']['text'] = "Rien a été modifié";
        $_SESSION['message']['type'] = "warning";
    }

} else {
    $_SESSION['message']['text'] ="Une information obligatoire non rensignée";
    $_SESSION['message']['type'] = "danger";
}

header('Location: ../vue/naissance.php');