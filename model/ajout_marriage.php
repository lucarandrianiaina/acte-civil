<?php
include 'connexion.php';
$id_h = $_POST['id_h'];
$id_f = $_POST['id_f'];
$date = $_POST['date_m'];

if(
    !empty($_POST['id_h'])
    && !empty($_POST['date_m'])
    && !empty($_POST['id_f'])
    
) {

      $sql = "INSERT INTO marriage(id_h_m,id_f_m,date_m)
        VALUES(?,?,?)";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
        $id_h,
        $id_f,
        $date
    ));
    
    if ( $req->rowCount()!=0) {
        $_SESSION['message']['text'] = "marriage ajouté avec succès";
        $_SESSION['message']['type'] = "success";
    }else {
        $_SESSION['message']['text'] = "Une erreur s'est produite lors de l'ajout de ce marriage";
        $_SESSION['message']['type'] = "danger";
    }


} else {
    $_SESSION['message']['text'] ="Une information obligatoire non rensignée";
    $_SESSION['message']['type'] = "danger";
}

header('Location: ../vue/marriage.php');