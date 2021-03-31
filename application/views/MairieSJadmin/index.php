<!DOCTYPE html>
<html lang="fr"> <!--indique la langue dans laquelle la page web est rédigéé aux robots de référencement ou aux logiciels de synthése vocale-->
<!--les balises de la partie head ne sont pas affichées à l'exeption de title-->

<head>
    <!--meta permet de fourni des indications différentes du contenu de la page web -->
    <meta charset="UTF-8"><!--permet de spécifier aux navigateurs l'encodage de la page web, il s'agit là de la valeur standard qui évite les pbs d'affichages des caractères spéciaux-->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css");?>">
  
    <title>Connexion</title>
    <!--on importe Bootstrap via une URL pointant sur un CDN (un serveur externe hébergeant des fichiers) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid border" id="image"> <!--container global de la page-->


    <div class="row mt-4 mb-5">
        <div class="col-12">

            <h5 class="d-flex justify-content-center"><Font color="blue">Ville de Saint Just en Chaussée</Font></h5>
            <h5 class="d-flex justify-content-center"><Font color="blue">Espace Employé Mairie</Font></h5>
           
        </div>
    </div>

    <br>
    <br>

    <div class="row">
        <div class="col-12 col-sm-6 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie.png");?>"  class="mt-4 mb-5" height="250" width="250" alt="Image responsive" title="Logo Mairie"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
         </div>
         <div class="col-12 col-sm-6 d-flex justify-content-center"> 
            <img src="<?php echo base_url("assets/images/MairieSJ/maire3.jpg");?>" height="300" width="300" alt="Image responsive" title="Maire"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>

    <br>
    <br>
    <br>

    <?php echo form_open(); ?>
        <div class="form-group">
            <label for="Log"><b>Login</b></label><input type="text" class="form-control" name="Log" id="Log" value="<?php  echo set_value('Log');?>" placeholder="Veuillez saisir vôtre login" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
            <?php echo form_error('Log'); // affiche l'erreur du champs concerné?>
            
            <br>
            <?php if  (isset ($_SESSION["messlog2"])){?> <span id="alerte-log" class="alert alert-danger"><?=$_SESSION['messlog2'];?></span><?php } ?>
                
            <br>
                
            <label for="motdepasse"><b>Mot de passe</b></label><input type="password" class="form-control" name="motdepasse" id="motdepasse"  placeholder="Veuillez saisir vôtre mot de passe de connexion" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
            <br>
            <?php if  (isset ($_SESSION["messlog3"])){?> <span id="alerte-log" class="alert alert-danger"><?=$_SESSION['messlog3'];?></span><?php } ?>
        </div>
            
        <br>
        <div class="d-flex justify-content-center" name = "actionauthentification">
            
            <button class="btn btn-primary" type="submit" name="submit" id ="submit" value="1" data-toggle="modal" data-target="#exampleModal" required>Connexion</button>


        </div>
    </form>

    <br>
    <br>
    <br>
    <br>

</div>

<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>



<?php


$_SESSION["messlog2"]="";
$_SESSION["messlog3"]="";
$_SESSION['log']="";
$_SESSION['status']="";

unset($_SESSION["messlog2"]);
unset($_SESSION["messlog3"]);
unset($_SESSION['log']);
unset($_SESSION['status']);

session_destroy();


?>