<?php
include_once "entete.php";
$liste = get_non_mort();
$dece = get_dece($_GET['id']);
?>
<!-- contenue -->

<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <form action=" <?= !empty($_GET['id']) ?  "../model/modif_dece.php" : "../model/ajout_dece.php" ?>" method="post">
            <?php
            if(!empty($_GET['id'])):
            ?>
            <input type="text" name="id" value="<?=$_GET['id'];?>" hidden>
                  <label for="id_p">Personne deceder</label>
                <input type="text" name="id_d" id="id_p" value="<?=$dece['nom']?>">
                
                <label for="date">chander la date de décé</label>
                <input type="text" name="date_encien" value="<?=$dece['date_d']?>">
                <label for="date">enter une nouvel date de décé</label>

                <input type="date" name="date_d" id="date">
                <?php
                else:
                  ?>
                <label for="id_p">Personne deceder</label>
                <select name="id_d" id="id_p">
                  <option value=""></option>
                  <?php 
                        if (!empty($liste) && is_array($liste)): 
                              foreach ($liste as $key => $value):
                  ?>
                    <option value="<?=$value['id'];?>"><?= $value['nom']; ?></option>
                  <?php 
                              endforeach;
                        endif;
                  ?>
                </select>
                <label for="date">date de décé</label>
                <input type="date" name="date_d" id="date">
                <?php
                  endif;
                ?>
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
                    <th>date de décé</th>
                    <th>action</th>
                </tr>
                <?php
                $mort = get_dece();

                if (!empty($mort) && is_array($mort)) {
                    foreach ($mort as $key => $value) {
                ?>
                        <tr>
                            <td><?= $value['nom'] ?></td>
                            <td><?= $value['date_d'] ?></td>
                            <td><a href="?id=<?= $value['id_d'] ?>"><i class='fas fa-edit'></i></a></td>
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