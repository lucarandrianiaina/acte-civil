<?php
include_once "entete.php";
?>
<!-- contenue -->

<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <form action=" <?= !empty($_GET['id']) ?  "../model/modif_marriage.php" : "../model/ajout_marriage.php" ?>" method="post">
            <?php
            if(!empty($_GET['id'])):
            ?>

            <!-- update mariage -->

                <?php
                else:
                  ?>
                <label for="id_h">nom de l'homme</label>
                <select name="id_h" id="id_h">
                  <option value=""></option>
                  <?php 
                  $liste_homme = get_homme();
                        if (!empty($liste_homme) && is_array($liste_homme)): 
                              foreach ($liste_homme as $key => $value):
                  ?>
                    <option value="<?=$value['id_h'];?>"><?= $value['nom']; ?></option>
                  <?php 
                              endforeach;
                        endif;
                  ?>
                </select>
                <label for="id_f">nom de la femme</label>
                <select name="id_f" id="id_f">
                  <option value=""></option>
                  <?php 
                  $liste_femme = get_femme();
                        if (!empty($liste_femme) && is_array($liste_femme)): 
                              foreach ($liste_femme as $key => $value):
                  ?>
                    <option value="<?=$value['id_f'];?>"><?= $value['nom']; ?></option>
                  <?php 
                              endforeach;
                        endif;
                  ?>
                </select>
                <label for="date">date de décé</label>
                <input type="date" name="date_m" id="date">
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
                    <th>id de l'épous</th>
                    <th>id de l'épouse</th>
                    <th>date de marriage</th>
                    <th>action</th>
                    <th>voir</th>
                </tr>
                <?php
                $marriage = get_marriage();
                if (!empty($marriage) && is_array($marriage)) {
                    foreach ($marriage as $key => $value) {
                ?>
                        <tr>
                            <td><?=$value['id_h_m'];?></td>
                            <td><?=$value['id_f_m'];?></td>
                              <td><?=$value['date_m'];?></td>
                            <td><a href="?id=<?= $value['id_m'] ?>"><i class='fas fa-edit'></i></a></td>
                            <td><a href="voir_marriage.php?id=<?= $value['id_m'] ?>"><i class='fas fa-eye'></i></a></td>
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