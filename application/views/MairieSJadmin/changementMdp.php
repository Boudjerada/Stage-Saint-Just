<?php if (isset($_SESSION['log'])){?>  

<?php
    if (isset ($_SESSION["mdpmodif"])){
        echo' <script> alert("Mot de passe modifié"); </script>';
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

    <h2 class="d-flex justify-content-center"><b>Modification mot de passe</b></h2>  
        
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
                <br>
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
    var resultat = confirm("Etes-vous certain de vouloir valider cette inscription\n
    Le Règlement général sur la protection des données (RGPD), entré en vigueur le 25 mai 2018, renforce les droits des citoyens de l'Union européenne concernant leurs données personnelles. Toutes les entreprises et associations des 28 États membres, ainsi que celles issues des pays hors UE mais collectant et traitant des données de résidents européens (comme Google, Facebook ou Amazon par exemple), y sont soumises.\n
    La RGPD repose sur trois grands principes à connaître.\n
    Principe clé de la RGPD : la transparence\n
    Le site doit indiquer clairement pourquoi il collecte vos données, comment elles seront utilisées, combien de temps elles seront conservées et les tiers qui y auront accès. Toutes les informations doivent être écrites dans un format compréhensible (concise, lisible, rédigée dans un vocabulaire simple). Le consentement doit être un acte positif (et non pas une case cochée par défaut) qui peut être retiré facilement.\n
    Principe clé de la RGPD : le droit des utilisateurs\n
    Chaque utilisateur bénéficie d'un droit d’accès à ses données (formulaire, adresse email, courrier...). Il est par exemple désormais possible de télécharger sur le site d\'Apple toutes les données que l\'entreprise détient sur vous. Vous pouvez exercer un droit à l\'oubli (photo ou information gênante, par exemple), un droit à l\'effacement (lorsqu\'on quitte un site d\'e-commerce...) et demander un déférencement sur un moteur de recherche. Comme pour la téléphonie mobile, il existe un droit à la portabilité : une fois vos données récupérées, vous pouvez les transmettre à un autre site.\n
    Principe clé de la RGPD : la responsabilité des entreprises\n
    Chaque entreprise est responsable non seulement des données qu'elle récolte mais aussi de celles transmises à des sous-traitants. Elle doit prouver qu'elle a mis en place tous les moyens adéquats pour protéger vos données et réfléchir en amont sur ce qui est pertinent de collecter ou non. En cas de violation des données (piratage, fuite...), l'entreprise concernée devra vous le signaler, ainsi qu'aux autorités compétentes, dans les 72 heures.\n
    En cas de manquement à ces obligations, les citoyens pourront se tourner vers l'autorité référente (Commission nationale de l'informatique et des libertés ou Cnil en France). Les sanctions encourues sont assez lourdes puisqu'elles peuvent aller jusqu'à 20 millions d'euros ou 4 % du chiffre d'affaires. ");
    
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


$_SESSION["messmdp"]="";
$_SESSION["mdpmodif"]="";


unset($_SESSION["messmdp"]);
unset($_SESSION["mdpmodif"]);


?>


<?php } ?>