<?php if (isset($_SESSION['log'])){?> 


<?php
    if (isset ($_SESSION["insok"])){
        echo' <script> alert("Inscription réussi"); </script>';
    }
?>

    <br>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h2 class="col-12 d-flex justify-content-center"><Font color="blue">Espace d'inscription des administrés de la ville de Saint Just en Chaussée</font></h2>
        </div>
    </div>

    <br>
    <br>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie");?>"  alt="Image responsive" title="Image promotion"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>

    <br>

    <h2 class="d-flex justify-content-center"><b>Formulaire d'inscription Agent de mairie</b></h2>  
        <p>Tout les champs sont obligatoires</p>
        <?php echo form_open(); ?>
            <div class="form-group">
                <label for="us_nom"><b>Nom</b></label><input type="text" class="form-control" name="us_nom" id="us_nom" value="<?=set_value('us_nom');?>" placeholder="Veuillez saisir le nom de l'agent" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <?php echo form_error('us_nom'); // affiche l'erreur du champs concerné?>
                <br>
                <label for="us_prenom"><b>Prenom</b></label><input type="text" class="form-control" name="us_prenom" id="us_prenom" value="<?=set_value('us_prenom');?>" placeholder="Veuillez saisir le prénom de l'agent" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <?php echo form_error('us_prenom'); // affiche l'erreur du champs concerné?>
                <br>
                <label for="us_status"><b>Status</b></label>
                    <select class="form-control" name="us_status" id="us_status">
                        <option value = 0  <?php if (isset($_SESSION["status"]) and $_SESSION["status"] == 0) echo "selected"; ?>>Informatique</option>
                        <option value = 1 <?php if (isset($_SESSION["status"]) and $_SESSION["status"] == 1) echo "selected"; ?>>Cantine</option>
                        <option value = 2 <?php if (isset($_SESSION["status"]) and $_SESSION["status"] == 2) echo "selected"; ?>>Espace jeunesse</option>
                        <option value = 3 <?php if (isset($_SESSION["status"]) and $_SESSION["status"] == 3) echo "selected"; ?>>Périscolaire</option>
                        <option value = 4 <?php if (isset($_SESSION["status"]) and $_SESSION["status"] == 4) echo "selected"; ?>>Logement</option>
                    </select> 
                
                <br>
                <label for="us_mail"><b>E-mail</b></label><input type="text" class="form-control" name="us_mail" id="us_mail" value="<?=set_value('us_mail'); ?>" placeholder="Veuillez saisir le mail de l'agent" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <?php echo form_error('us_mail'); // affiche l'erreur du champs concerné?>
              
                <?php if  (isset ($_SESSION["messMail"])){?> <span id="alerte-mail" class="alert alert-danger"><?=$_SESSION['messMail'];?></span><?php }?>
                <br>
               
                <label for="us_log"><b>Login</b></label><input type="text" class="form-control" name="us_log" id="us_log" value="<?=set_value('us_log'); ?>" placeholder="Choisir un login de connexion de 6 caractères minimum" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <?php echo form_error('us_log'); // affiche l'erreur du champs concerné?>
                
                <?php if  (isset ($_SESSION["messLogin"])){?> <span id="alerte-mail" class="alert alert-danger"><?=$_SESSION['messLogin'];?></span><?php }?>
                <br>
                
                <label for="us_mp"><b>Mot de passe</b></label><input type="password" class="form-control" name="us_mp" id="us_mp" value="<?=set_value('us_mp');?>" placeholder="Choisir un mot de passe de connexion de 8 caractères" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <?php echo form_error('us_mp'); // affiche l'erreur du champs concerné?>
                <br>
                <label for="us_mp2"><b>Confirmer mot de passe</b></label><input type="password" class="form-control" name="us_mp2" id="us_mp2" placeholder="Veuillez confirmer le mot de passe de connexion" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <br>
                <?php if  (isset ($_SESSION["messmdp"])){?> <span id="alerte-mail" class="alert alert-danger"><?=$_SESSION['messmdp'];?></span><?php }?>
                <br>
            </div>
            <div class="d-flex justify-content-center" name = "actioninscription">
                <h1><button class="btn btn-dark" type="submit"  onclick="verif();">Inscription</button></h1>
                <h1><a  class="btn btn-primary ml-3" href="<?= base_url("index.php/AdminStJust/accueil");?>">Retour</a></h1>
            </div>
        </form>

    <br>
    

<script>
//demande si on envoit ou non le formulaire au controleur
function verif(){ 
    //Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir valider cette inscription ?");
    
    if (resultat==false){
        alert("Vous avez annulé l'inscription !");
        event.preventDefault();    
    }
}
</script>


</div>

<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>


<?php

//Detruction des variables de session qui ne sont plus nécessaires

$_SESSION["messMail"]="";
$_SESSION["messLogin"]="";
$_SESSION["messmdp"]="";
$_SESSION["stat"]="";
$_SESSION["insok"]="";

unset($_SESSION["messMail"]);
unset($_SESSION["messLogin"]);
unset($_SESSION["messmdp"]);
unset($_SESSION["stat"]);
unset($_SESSION["insok"]);


?>


<?php } ?>