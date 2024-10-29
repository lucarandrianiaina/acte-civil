<?php
include 'connexion.php';
$id_p = $_POST['id_d'];
$date = $_POST['date_d'];
if(
    !empty($_POST['id_d'])
    && !empty($_POST['date_d'])
) {

      $sql = "INSERT INTO dece(id_d,date_d)
        VALUES(?,?)";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
        $id_p,
        $date
    ));
      $mort = 1;
      $sql1 = "UPDATE personne SET dece=? WHERE id=?";
      $req1 = $connexion->prepare($sql1);

      $req1->execute(array(
      $mort,
      $id_p
));
    if ( $req->rowCount()!=0) {
        $_SESSION['message']['text'] = "personne est ajouté a la liste des décédés";
        $_SESSION['message']['type'] = "success";
    }else {
        $_SESSION['message']['text'] = "Une erreur s'est produite lors de l'ajout de ce personne";
        $_SESSION['message']['type'] = "danger";
    }

} else {
    $_SESSION['message']['text'] ="Une information obligatoire non rensignée";
    $_SESSION['message']['type'] = "danger";
}

header('Location: ../vue/dece.php');