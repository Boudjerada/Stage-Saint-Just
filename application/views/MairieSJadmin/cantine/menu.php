<?php if (isset($_SESSION['log'])){?>

<div id="image">
<br>  
    <div class="row">
        <div class="col-12 col-sm-6 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie.png");?>"  class="mt-4 mb-5" height="250" width="250" alt="Image responsive" title="Logo Mairie"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
         </div>
         <div class="col-12 col-sm-6 d-flex justify-content-center"> 
            <img src="<?php echo base_url("assets/images/MairieSJ/maire3.jpg");?>" height="300" width="300" alt="Image responsive" title="Maire"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>


<div class="table-responsive"> <!--tableau responsive-->
    
    <table class="table table-hover table-bordered">

        <thead>
            <tr class="table-active">
                <th><h3 class=" d-flex justify-content-center">Semaine</h3></th>
                <th><h3 class="d-flex justify-content-center">Supression</h3></th>
            </tr>
        <thead>
        <tbody>

            <?php foreach ($menu as $row){?>
            <tr>
                <th class='table-warning'>
                    <?php $fich="MENUS_DU_".$row->debut."_".$row->moisd."_AU_".$row->fin."_".$row->moisf; ?>
                    <a class="btn-lg d-flex justify-content-center" href="<?php echo base_url("Cantine/Menu/$fich.pdf");?>"  target="_blank"><FONT COLOR="blue"><?= "Menu du ".$row->debut." ".$row->moisd." au ".$row->fin." ".$row->moisf." ".$row->annee?></FONT></a>
                </th>
                <th>
                    <h3><a class="btn-lg btn-outline-success d-flex justify-content-center" href="<?= base_url('index.php/AdminStJust/suppMenu/'.$row->menu_id);?>">Supprimer</a></h3>
                </th>
            </tr>
        
        <?php } ?>
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-12 d-flex justify-content-center">
        <h1><a class="btn btn-dark" href="<?= base_url('index.php/AdminStJust/ajoutMenu');?>">Ajout 1 semaine de menu</a></h1>
        <h1><a class="btn ml-3 btn-success" href="<?= base_url("index.php/AdminStJust/accueil");?>">Retour</a></h1>
    </div>
</div>




<br>

</div>      
</div>


<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
</html>

<?php } ?>

<?php 

$_SESSION["fich"]="";
unset($_SESSION["fich"]);

?>