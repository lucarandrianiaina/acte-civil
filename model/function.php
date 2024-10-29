<?php
include 'connexion.php';


function get_personne($id = null)
{
    if (!empty($id)) {
        $sql = "SELECT * FROM personne WHERE id=?";

        $req = $GLOBALS['connexion']->prepare($sql);

        $req->execute(array($id));

        return $req->fetch();
    } else {
        $sql = "SELECT * FROM personne";

        $req = $GLOBALS['connexion']->prepare($sql);

        $req->execute();

        return $req->fetchAll();
    }
}

function get_non_mort(){
    $valide = false;
    $sql = "SELECT * FROM personne WHERE dece= ?";
    $req = $GLOBALS['connexion']->prepare($sql);
    $req->execute(array($valide));
    return $req->fetchAll();
}

function get_dece($id = null)
{
    if (!empty($id)) {
        $sql = "SELECT dece.id_d,personne.nom,personne.date_nais,dece.date_d FROM dece INNER JOIN personne ON personne.id=dece.id_d WHERE id_d=?";

        $req = $GLOBALS['connexion']->prepare($sql);

        $req->execute(array($id));

        return $req->fetch();
    } else {
        $sql = "SELECT dece.id_d,personne.nom,personne.date_nais,dece.date_d FROM dece INNER JOIN personne ON personne.id=dece.id_d";

        $req = $GLOBALS['connexion']->prepare($sql);

        $req->execute();

        return $req->fetchAll();
    }
}

function get_dernier_personne(){
        $sql = "SELECT id,sexe FROM personne ORDER BY id DESC LIMIT 1";

        $req = $GLOBALS['connexion']->prepare($sql);

        $req->execute();

        return $req->fetch(PDO::FETCH_ASSOC);
}

function get_homme(){ 
    $mort = 0;
    $sql = "SELECT homme.id_h, personne.nom FROM homme INNER JOIN personne ON personne.id=homme.id_h WHERE personne.dece=?";

    $req = $GLOBALS['connexion']->prepare($sql);

    $req->execute(array($mort));

    return $req->fetchAll();
    
}

function get_femme(){ 
    $mort = 0;
    $sql = "SELECT femme.id_f, personne.nom FROM femme INNER JOIN personne ON personne.id=femme.id_f WHERE personne.dece=?";

    $req = $GLOBALS['connexion']->prepare($sql);

    $req->execute(array($mort));

    return $req->fetchAll();
    
}

function get_marriage($id = null){
    if (!empty($id)) {
        $sql = "SELECT * FROM marriage WHERE id_m=?";

        $req = $GLOBALS['connexion']->prepare($sql);

        $req->execute(array($id));

        return $req->fetch();
    } else {
        $sql = "SELECT * FROM marriage";

        $req = $GLOBALS['connexion']->prepare($sql);

        $req->execute();

        return $req->fetchAll();
    }
}

function get_epoux(){
    $sql = "SELECT personne.nom FROM marriage INNER JOIN personne.id= marriage.id_h_m";

    $req = $GLOBALS['connexion']->prepare($sql);

    $req->execute();

    return $req->fetchAll();
}
function get_epouse(){

}

function get_all($table)
{
    $sql = "SELECT COUNT(*) AS nbre FROM ".$table;

    $req = $GLOBALS['connexion']->prepare($sql);

    $req->execute();

    return $req->fetch();
}

function get_divorce($id = null){
    if (!empty($id)) {
        $sql = "SELECT * FROM divorce WHERE id_div=?";

        $req = $GLOBALS['connexion']->prepare($sql);

        $req->execute(array($id));

        return $req->fetch();
    } else {
        $sql = "SELECT * FROM divorce";

        $req = $GLOBALS['connexion']->prepare($sql);

        $req->execute();

        return $req->fetchAll();
    }
}
?>