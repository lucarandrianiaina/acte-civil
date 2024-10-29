<?php
include 'connexion.php';
$id_m = $_POST['id_m'];
$date = $_POST['date_div'];

if(
    !empty($_POST['id_m'])
    && !empty($_POST['date_div']
    
)) {

      $sql = "INSERT INTO divorce(id_div_m,date_div)
        VALUES(?,?)";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
        $id_m,
        $date
    ));
    
    if ( $req->rowCount()!=0) {
        $_SESSION['message']['text'] = "divorce ajouté avec succès";
        $_SESSION['message']['type'] = "success";
    }else {
        $_SESSION['message']['text'] = "Une erreur s'est produite lors de l'ajout de ce divorce";
        $_SESSION['message']['type'] = "danger" ;
    }


} else {
    $_SESSION['message']['text'] ="Une information obligatoire non rensignée";
    $_SESSION['message']['type'] = "danger";
}

header('Location: ../vue/divorce.php');