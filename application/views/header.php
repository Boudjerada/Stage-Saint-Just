<?php if (isset($_SESSION['log'])){?>

    <!DOCTYPE html>
<html lang="fr"> <!--indique la langue dans laquelle la page web est rédigéé aux robots de référencement ou aux logiciels de synthése vocale-->
<!--les balises de la partie head ne sont pas affichées à l'exeption de title-->

<head>
    <!--meta permet de fourni des indications différentes du contenu de la page web -->
    <meta charset="UTF-8"><!--permet de spécifier aux navigateurs l'encodage de la page web, il s'agit là de la valeur standard qui évite les pbs d'affichages des caractères spéciaux-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0",shrink-to-fit=no>
    <link rel="stylesheet" href="../../assets/css/styles.css">
  
    <title><?= $title ?></title>
    <!--on importe Bootstrap via une URL pointant sur un CDN (un serveur externe hébergeant des fichiers) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid border"> <!--container global de la page-->



<?php if (isset($_SESSION['log'])){?>
   <div class="row">
        <div id ="nav" class="col-12 d-flex justify-content-center">
<!--navbar-expand-sm qui indique à partir de quelle dimension (ici sm, donc à plus de 576px) la barre de navigation sera visible entièrement au lieu d'afficher le bouton hamburger.-->
            <nav  class="navbar navbar-expand-lg  navbar-light"> <!--couleur de la barre de navigation-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                    <div class="collapse navbar-collapse" id="collapsibleNavbar1">
                        <ul class="navbar-nav">
                        
                        <?php if ($_SESSION['status'] == 0){?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url("index.php/AdminStJust/enregistrementAgent");?>"><b>Enregistrement Agent de mairie</b></a>
                            </li>
                            <?php } ?>
                            
                            <li class="nav-item">
                                <a class="nav-link"href="<?= base_url("index.php/AdminStJust/accueil");?>"><b>Accueil</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"href="<?= base_url("index.php/AdminStJust/changementMdp");?>"><b>Changer mot de passe</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url("index.php/AdminStJust");?>"><b>Deconnexion</b></a>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>
    </div>

   

<?php }
?>



<style>
/*Navbar*/
#nav{
    background-color: rgb(0, 118, 186);
}
</style>


<?php } 

else { ?>

<!DOCTYPE html>
<html lang="fr"> <!--indique la langue dans laquelle la page web est rédigéé aux robots de référencement ou aux logiciels de synthése vocale-->
<!--les balises de la partie head ne sont pas affichées à l'exeption de title-->

<head>
    <!--meta permet de fourni des indications différentes du contenu de la page web -->
    <meta charset="UTF-8"><!--permet de spécifier aux navigateurs l'encodage de la page web, il s'agit là de la valeur standard qui évite les pbs d'affichages des caractères spéciaux-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0",shrink-to-fit=no>
    <title>Non connecté</title>
    <!--on importe Bootstrap via une URL pointant sur un CDN (un serveur externe hébergeant des fichiers) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<div class="container-fluid border"> <!--container global de la page-->
    
    <h3 class="d-flex justify-content-center mt-5"> Vous n'êtes pas autorisé à accéder à cette page, veuillez vous connecter</h3>
    <h1><a class="btn btn-success d-flex justify-content-center" href="<?= base_url("index.php/AdminStJust/index");?>"><b>Connexion</b></a></h1>

</div>

<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="<?php echo base_url("assets/js/SJ/AdminSJ.js");?>"></script>
</body>
</html>

<?php } ?>

