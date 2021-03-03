<?php if (isset($_SESSION['log'])){?>
    <br>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie");?>"  alt="Image responsive" title="Image promotion"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>
    
    <br>
    <br>
    
    <p>Les jours sont a ecrire entre 1 et 31, sauf le premier du mois à ecrire 1ER. Les mois sont a écrire en lettre Majuscules sans accent. Enfin l'année a écrire en 4 chiffres Ceci pour compatibilité avec l'ouverture du fichier pdf correspondant à placer dans le répertoire Cantine/Menu</p>

    <?php echo form_open_multipart(); ?>
                <div class="form-group">
                   
                    <label for="debut"><b>Jour Début Semaine :</b></label><input type="text" class="form-control" name="debut" id="debut" value="<?php echo set_value('debut');?>">
                    <?php echo form_error('debut'); // affiche l'erreur du champs nom obligatoire?>
                    
                    <label for="fin"><b>Jour Fin Semaine :</b></label><input type="text" class="form-control" name="fin" id="fin" value="<?php echo set_value('fin');?>">
                    <?php echo form_error('fin'); // affiche l'erreur du champs nom obligatoire?>

                    <label for="moisd"><b>Mois début de semaine :</b></label><input type="text" class="form-control" name="moisd" id="moisdt" value="<?php echo set_value('moisd');?>">
                    <?php echo form_error('moisd'); // affiche l'erreur du champs nom obligatoire?>

                    <label for="moisf"><b>Mois fin Semaine :</b></label><input type="text" class="form-control" name="moisf" id="moisf" value="<?php echo set_value('moisf');?>">
                    <?php echo form_error('moisf'); // affiche l'erreur du champs nom obligatoire?>

                    <label for="annee"><b>Année :</b></label><input type="text" class="form-control" name="annee" id="annee" value="<?php echo set_value('annee');?>">
                    <?php echo form_error('annee'); // affiche l'erreur du champs nom obligatoire?>
                    <br>
                    <label for="file"><b>Fichier PDF du Menu :</b></label>
                    <br>
                    <input type="file" name="fichier" id="fichier">
                    <br>
                    <br>
                    <?php if  (isset ($_SESSION["fich"])){?> <span id="alerte-mail" class="alert alert-danger"><?=$_SESSION['fich'];?></span><?php }?>
                    <br>
                    
                </div>

                <div class="d-flex justify-content-center" name ="actionProduit">
                    <h1><button class="btn btn-primary ml-1" type="submit" onclick="verif();">Enregistrer</button></h1>
                    <h1><a class="btn btn-primary ml-2"   href="<?= base_url("index.php/AdminStJust/menu");?>">Retour</a></h1>
                </div>

    </form>

<script>
//vérifie si on envoi ou non le formulaire 
    function verif(){ 
//Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir ajouter cet enregistrement ?");

    if (resultat==false){
        alert("Vous avez annulé cet enregistrement \nAucune modification ne sera apportée à la base Menu!");
        //annule l'évènement par défaut ... SUBMIT vers "script_modif.php"
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


<?php } ?>

<?php 

$_SESSION["fich"]="";
unset($_SESSION["fich"]);

?>