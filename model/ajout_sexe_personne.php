<?php
include_once 'function.php';
$enregistre = get_dernier_personne();
$id = $enregistre['id'];
if($enregistre['sexe'] == "male"){
      // ajouter dans la table homme si la sexe est male
      $sql = "INSERT INTO homme(id_h)
        VALUES(?)";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
        $id
    ));
    echo 'homme';
}else{
      // ajouter dans la table femme si la sexe est femele
      $sql = "INSERT INTO femme(id_f)
        VALUES(?)";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
        $id
    ));
    echo 'femme';
}
header('Location: ../vue/naissance.php');
?>