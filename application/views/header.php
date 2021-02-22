<!DOCTYPE html>
<html lang="fr"> <!--indique la langue dans laquelle la page web est rédigéé aux robots de référencement ou aux logiciels de synthése vocale-->
<!--les balises de la partie head ne sont pas affichées à l'exeption de title-->

<head>
    <!--meta permet de fourni des indications différentes du contenu de la page web -->
    <meta charset="UTF-8"><!--permet de spécifier aux navigateurs l'encodage de la page web, il s'agit là de la valeur standard qui évite les pbs d'affichages des caractères spéciaux-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0",shrink-to-fit=no>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/styles2.css">
    <title><?= $title ?></title>
    <!--on importe Bootstrap via une URL pointant sur un CDN (un serveur externe hébergeant des fichiers) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="container border"> <!--container global de la page-->



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
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url("index.php/AdminStJust/enregistrementAgent");?>"><b>Enregistrement Agent de mairie</b></a>
                            </li>
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