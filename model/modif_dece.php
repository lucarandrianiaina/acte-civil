<?php
include 'connexion.php';
$id_p = $_POST['id'];
$date = $_POST['date_d'];
if (
      !empty($_POST['id'])
    && !empty($_POST['date_d'])
) {

$sql = "UPDATE dece SET date_d=? WHERE id_d=?";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
      $date,
      $id_p
    ));
    
    if ( $req->rowCount()!=0) {
        $_SESSION['message']['text'] = "la date a été modifié avec succès";
        $_SESSION['message']['type'] = "success";
    }else {
        $_SESSION['message']['text'] = "Rien a été modifié";
        $_SESSION['message']['type'] = "warning";
    }

} else {
    $_SESSION['message']['text'] ="Une information obligatoire non rensignée";
    $_SESSION['message']['type'] = "danger";
}

header('Location: ../vue/dece.php');