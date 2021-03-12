<?php if (isset($_SESSION['log'])){?>  

<?php
    if (isset ($_SESSION["mdpmodif"])){
        echo' <script> alert("Mot de passe modifié"); </script>';
    }
?>

<div id="image">
    <br>

    <div class="row">
        <div class="col-12">
            <h2 class="col-12 d-flex justify-content-center"><Font color="blue">Modification</font></h2>
            <h2 class="col-12 d-flex justify-content-center"><Font color="blue">Mot de passe</font></h2>
        </div>
    </div>

    <br>
    <br>

    <div class="row">
        <div class="col-12 col-sm-6 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie.png");?>"  class="mt-4 mb-5" height="250" width="250" alt="Image responsive" title="Logo Mairie"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
         </div>
         <div class="col-12 col-sm-6 d-flex justify-content-center"> 
            <img src="<?php echo base_url("assets/images/MairieSJ/maire.jpg");?>" height="300" width="300" alt="Image responsive" title="Maire"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>

    <br>

        
        <br>

        <?php echo form_open(); ?>
            <div class="form-group">
                
                <label for="us_mp3"><b>Mot de passe</b></label><input type="password" class="form-control" name="us_mp3" id="us_mp3" value="<?=set_value('us_mp3');?>" placeholder="Saisir votre ancien mot de passe de connexion de 8 caractères" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <?php echo form_error('us_mp3'); // affiche l'erreur du champs concerné?>
                <br>
                <label for="us_mp"><b>Nouveau Mot de passe</b></label><input type="password" class="form-control" name="us_mp" id="us_mp" value="<?=set_value('us_mp');?>" placeholder="Choisir un nouveau mot de passe de connexion de 8 caractères" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <?php echo form_error('us_mp'); // affiche l'erreur du champs concerné?>
                <br>
                <label for="us_mp2"><b>Confirmer mot de passe</b></label><input type="password" class="form-control" name="us_mp2" id="us_mp2" placeholder="Veuillez confirmer le nouveau mot de passe de connexion" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <br>
                <?php if  (isset ($_SESSION["messmdp"])){?> <span id="alerte-mail" class="alert alert-danger"><?=$_SESSION['messmdp'];?></span><?php }?>
              
            </div>
            <div class="d-flex justify-content-center" name = "actioninscription">
                <h1><button class="btn btn btn-dark" type="submit"  onclick="verif();">Modifier</button></h1>
                <h1><a  class="btn btn btn-primary ml-3" href="<?= base_url("index.php/AdminStJust/accueil");?>">Retour</a></h1>
            </div>
        </form>
        
    

    <br>

<script>
//demande si on envoit ou non le formulaire au controleur
function verif(){ 
    //Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir valider cette inscription ?");
    
    if (resultat==false){
        alert("Vous avez annulé la modification de votre mot de passe !");
        event.preventDefault();    
    }
}
</script>


</div>
</div>

<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>


<?php


$_SESSION["messmdp"]="";
$_SESSION["mdpmodif"]="";


unset($_SESSION["messmdp"]);
unset($_SESSION["mdpmodif"]);


?>


<?php } ?>