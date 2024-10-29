<?php
include 'connexion.php';
$nom = $_POST['nom'];
$date = $_POST['date_nais'];
$sexe = $_POST['sexe'];
$nom_p = $_POST['nom_p'];
$nom_m = $_POST['nom_m'];
if(
    !empty($_POST['nom'])
    && !empty($_POST['date_nais'])
    && !empty($_POST['sexe'])
    && !empty($_POST['nom_p'])
    && !empty($_POST['nom_m'])
) {

      $sql = "INSERT INTO personne(nom,date_nais,sexe,nom_pere,nom_mere)
        VALUES(?, ?, ?,?,?)";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
        $nom,
        $date,
        $sexe,
        $nom_p,
        $nom_m
    ));
    
    if ( $req->rowCount()!=0) {
        $_SESSION['message']['text'] = "personne ajouté avec succès";
        $_SESSION['message']['type'] = "success";
    }else {
        $_SESSION['message']['text'] = "Une erreur s'est produite lors de l'ajout de ce personne";
        $_SESSION['message']['type'] = "danger";
    }


} else {
    $_SESSION['message']['text'] ="Une information obligatoire non rensignée";
    $_SESSION['message']['type'] = "danger";
}

header('Location: ajout_sexe_personne.php');