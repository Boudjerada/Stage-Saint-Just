<?php if (isset($_SESSION['log'])){?>
    
    <br>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie");?>"  alt="Image responsive" title="Image promotion"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>
    
    <br>
    <br>
    
    <p>Le mois est à écrire en lettre capital pour compatibilité avec l'ouverture du fichier pdf correspondant, fichier à joindre a cette enregistrement. Par exemple pour AVRIL, réalisé l'opération 2 fois avec mois de réservation AVRIL, l'un avec fichier saint just, l'autre pour exterieur saint just</p>

     <?php echo form_open_multipart(); ?>
                <div class="form-group">
                   
                    <label for="res_mois"><b>Mois de réservation :</b></label><input type="text" class="form-control" name="res_mois" id="res_mois" value="<?php echo set_value('res_mois');?>">
                    <?php echo form_error('res_mois'); // affiche l'erreur du champs nom obligatoire?>
                    <br>
                    <label for="file"><b>Fichier PDF de réservation :</b></label>
                    <br>
                    <input type="file" name="fichier" id="fichier">
                    <br>
                    <br>
                    <?php if  (isset ($_SESSION["fich"])){?> <span id="alerte-mail" class="alert alert-danger"><?=$_SESSION['fich'];?></span><?php }?>
                    <br>
                </div>  
                <div class="d-flex justify-content-center" name ="actionProduit">
                    <h1><button class="btn btn-primary ml-1" type="submit" onclick="verif();">Enregistrer</button></h1>
                    <h1><a class="btn btn-primary ml-2"   href="<?= base_url("index.php/AdminStJust/reservation");?>">Retour</a></h1>
                </div>

    </form>

<script>
//vérifie si on envoi ou non le formulaire 
    function verif(){ 
//Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir ajouter cet enregistrement ?");

    if (resultat==false){
        alert("Vous avez annulé cet enregistrement \nAucune modification ne sera apportée à la base Réservation!");
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