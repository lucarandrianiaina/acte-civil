<?php
include_once "entete.php";
$get_p = get_personne($_GET['id']);
?>

<!-- contenue -->

<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <form action=" <?= !empty($_GET['id']) ?  "../model/modif_naissance.php" : "../model/ajout_naissance.php" ?>" method="post">
                <input type="text" name="id" value="<?= !empty($_GET['id']) ?  $get_p['id'] : "" ?>" hidden>
                <label for="nom">Nom et Prénom</label>
                <input type="text" value="<?= !empty($_GET['id']) ?  $get_p['nom'] : "" ?>" name="nom" id="nom" placeholder="Veuillez saisir le nom">
                
                <label for="date">date de naissance</label>
                <input type="date" value="<?= !empty($_GET['id']) ?  $get_p['date_nais'] : "" ?>" name="date_nais" id="date" placeholder="date de naissance">
                
                <label for="sexe">sexe</label>
                <select name="sexe" id="sexe" value="<?= !empty($_GET['id']) ?  $get_p['sexe'] : "" ?>">
                    <option value="male">male</option>
                    <option value="femele">femele</option>
                </select>
                <label for="nom_p">Nom pere</label>
                <input type="text" value="<?= !empty($_GET['id']) ?  $get_p['nom_pere'] : "" ?>" name="nom_p" id="nom_p" placeholder="Veuillez saisir le nom du pere">
                <label for="nom_m">Nom mere</label>
                <input type="text" value="<?= !empty($_GET['id']) ?  $get_p['nom_mere'] : "" ?>" name="nom_m" id="nom_m" placeholder="Veuillez saisir le nom de la mere">
                <button type="submit" name="valider">Valider</button>

                <?php
                if (!empty($_SESSION['message']['text'])) {
                ?>
                    <div class="alert <?= $_SESSION['message']['type'] ?>">
                        <?= $_SESSION['message']['text'] ?>
                    </div>
                <?php
                }
                ?>
            </form>

        </div>
        <div class="box">
            <table class="mtable">
                <tr>
                    <th>Nom</th>
                    <th>date de naissance</th>
                    <th>sexe</th>
                    <th>pere</th>
                    <th>mere</th>
                    <th>action</th>
                </tr>
                <?php
                $personnes = get_personne();

                if (!empty($personnes) && is_array($personnes)) {
                    foreach ($personnes as $key => $value) {
                ?>
                        <tr>
                            <td>
                                <?= $value['nom'] ?>
                                <?php
                                if($value['dece']==true):
                                    echo '<i class="fas fa-cross"></i>';
                                endif;
                                ?>
                                
                            </td>
                            <td><?= $value['date_nais'] ?></td>
                            <td><?= $value['sexe'] ?></td>
                            <td><?= $value['nom_pere'] ?></td>
                            <td><?= $value['nom_mere'] ?></td>
                            <td><a href="?id=<?= $value['id'] ?>"><i class='fas fa-edit'></i></a></td>
                        </tr>
                <?php

                    }
                }
                ?>
            </table>
        </div>
    </div>

</div>


<?php
include_once "pied.php";
?>