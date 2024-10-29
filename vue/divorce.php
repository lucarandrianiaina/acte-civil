<?php
include_once "entete.php";
?>
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <form action=" <?= !empty($_GET['id']) ?  "../model/modif_divorce.php" : "../model/ajout_divorce.php" ?>" method="post">
            <?php
            if(!empty($_GET['id'])):
            ?>

            <!-- update divorce -->

                <?php
                else:
                  ?>
                <label for="id">Id du marriage</label>
                <select name="id_m" id="id">
                  <option value=""></option>
                  <?php
                  $id = get_marriage();
                  if (!empty($id) && is_array($id)): 
                        foreach ($id as $key => $value) :
                        ?>
                        <option value="<?=$value['id_m'];?>"><?=$value['id_m'];?></option>
                        <?php
                        endforeach;
                  endif;
                   ?>
                </select>
                <label for="date">date de décé</label>
                <input type="date" name="date_div" id="date">
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
                    <th>id de divorce</th>
                    <th>date de divorce</th>
                    <th>action</th>
                </tr>
                <?php
                $divorce = get_divorce();
                if (!empty($divorce) && is_array($divorce)) {
                    foreach ($divorce as $key => $value) {
                ?>
                        <tr>
                            <td><?=$value['id_div'];?></td>
                              <td><?=$value['date_div'];?></td>
                            <td><a href="?id=<?= $value['id_div'] ?>"><i class='fas fa-edit'></i></a></td>
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