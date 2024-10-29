<?php
include_once "entete.php";

?>

<!-- contenue -->

<div class="home-content">
      <div class="container" style="display:flex;">
            <div class="overview-boxes">
                  <div class="box">
                        <div class="right-side">
                        <div class="box-topic">NAISSANCES</div>
                        <div class="number"><?php echo get_all('personne')['nbre'];?></div>
                        </div>
                        <a href="naissance.php"><i class="fas fa-plus"></i></a>
                        
                  </div>      
            </div>
            <div class="overview-boxes">
                  <div class="box">
                        <div class="right-side">
                        <div class="box-topic">HOMME</div>
                        <div class="number"><?php echo get_all('homme')['nbre'];?></div>
                        </div>
                        <a href="naissance.php"><i class="fas fa-plus"></i></a>
                        
                  </div>      
            </div>
            <div class="overview-boxes">
                  <div class="box">
                        <div class="right-side">
                        <div class="box-topic">FEMMES</div>
                        <div class="number"><?php echo get_all('femme')['nbre'];?></div>
                        </div>
                        <a href="naissance.php"><i class="fas fa-plus"></i></a>
                        
                  </div>      
            </div>
            <div class="overview-boxes">
                  <div class="box">
                        <div class="right-side">
                        <div class="box-topic">DÉCÉ</div>
                        <div class="number"><?php echo get_all('dece')['nbre'];?></div>
                        </div>
                        <a href="dece.php"><i class="fas fa-plus"></i></a>
                        </div>
                  </div>
            <div class="overview-boxes">
                  <div class="box">
                        <div class="right-side">
                        <div class="box-topic">MARIAGE</div>
                        <div class="number"><?php echo get_all('marriage')['nbre'];?></div>
                        </div>
                        <a href="marriage.php"><i class="fas fa-plus"></i></a>
                        </div>
            </div>
            <div class="overview-boxes">
                  <div class="box">
                        <div class="right-side">
                        <div class="box-topic">DIVORCE</div>
                        <div class="number"><?php echo get_all('divorce')['nbre'];?></div>
                        </div>
                        <a href="divorce.php"><i class="fas fa-plus"></i></a>
                        </div>
            </div>
      </div>
    <!--  -->
</div>

<?php
include_once "pied.php";
?>