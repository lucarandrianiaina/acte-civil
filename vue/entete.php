<?php
include_once '../model/function.php';

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>
        <?php
        $title = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
        if($title=="index"){
            echo "Tableau de bord";
        }else{
            echo ucfirst($title);
        }
        ?>
    </title>
    <link rel="stylesheet" href="../public/css/style.css" />
    <!-- fontawesome style -->
    <link rel="stylesheet" href="../public/fontawesome-free-5.15.4-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="sidebar hidden-print">
        <div class="logo-details">
            <i class="fas fa-paper-plane"></i>
            <span class="logo_name">ACTE CIVIL</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="index.php" ? "active" : "" ?> ">
                    <i class="fas fa-dashcube"></i>
                    <span class="links_name">Tableau de bord</span>
                </a>
            </li>
            <li>
                <a href="naissance.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="naissance.php" ? "active" : "" ?> ">
                    <i class='fas fa-venus-double'></i>
                    <span class="links_name">naissance</span>
                </a>
            </li>
            <li>
                <a href="dece.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="dece.php" ? "active" : "" ?> ">
                    <i class="fas fa-church"></i>
                    <span class="links_name">décé</span>
                </a>
            </li>
            <li>
                <a href="marriage.php"  class="<?php echo basename($_SERVER['PHP_SELF'])=="marriage.php" ? "active" : "" ?> ">
                    <i class="fas fa-place-of-worship"></i>
                    <span class="links_name">marriage</span>
                </a>
            </li>
            <li>
                <a href="divorce.php"  class="<?php echo basename($_SERVER['PHP_SELF'])=="divorce.php" ? "active" : "" ?> ">
                    <i class="bx bx-user"></i>
                    <span class="links_name">divorce</span>
                </a>
            </li>
            
        </ul>
    </div>
    <section class="home-section">
        <nav class="hidden-print">
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
                <span class="dashboard">
                    <?php
                    $title = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
                    if($title=="index"){
                        echo "Tableau de bord";
                    }else{
                        echo ucfirst($title);
                    }
                    ?>
                </span>
            </div>
            
            <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <span class="admin_name">
                    <?php
                    $user = $_SESSION['utilisateur'];
                    if(!$user==""){
                        $sql = "SELECT * FROM utilisateur WHERE id_u=?";
                        $req = $GLOBALS['connexion']->prepare($sql);
                        $req->execute(array($user));
                        $utilisateur = $req->fetch();
                        echo $utilisateur['nom_u'];
                    }else{
                        header('Location: login.php');
                    }
                    ?>
                    <a href="../model/deconnexion.php">se deconnecter</a>
                </span>
                <i class="bx bx-chevron-down"></i>
            </div>
        </nav>