<?php if (isset($_SESSION['log'])){?>
    
<div id="image">
    <br>

    <div class="row">
        <div class="col-12">
            <h2 class="d-flex justify-content-center"><Font color="blue">Service mairie</Font></h2>
            <h3 class="d-flex justify-content-center"><Font color="blue">Modification coordonnées</Font></h3>
            
        </div>
    </div>

    <br>
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
    
    <?php echo form_open(); ?>
                <div class="form-group">
                    <label for="serv_id"><b>Identifiant Service</b></label><input type="text" class="form-control" name="serv_id" id="serv_id" value="<?php echo $service->serv_id?>" Readonly>
                    
                    <label for="serv_nom"><b>Nom Service :</b></label><input type="text" class="form-control" name="serv_nom" id="serv_nom" value="<?php echo set_value('serv_nom', $service->serv_nom);?>">
                    <?php echo form_error('serv_nom'); // affiche l'erreur du champs nom obligatoire
                        if (isset ( $_SESSION['messnom'])) echo  "<FONT color='red'>".$_SESSION['messnom']."</FONT>"."<br>"; ?>
                    
                    <label for="serv_tel"><b>Téléphone du service :</b></label><input type="text" class="form-control" name="serv_tel" id="serv_tel" value="<?php echo set_value('serv_tel', $service->serv_tel);?>">
                    <?php echo form_error('serv_tel'); // affiche l'erreur du champs nom obligatoire?>

                    <label for="serv_mail"><b>Mail du service :</b></label><input type="text" class="form-control" name="serv_mail" id="serv_mail" value="<?php echo set_value('serv_mail', $service->serv_mail);?>">
                    <?php echo form_error('serv_mail'); // affiche l'erreur du champs nom obligatoire?>
                    
                </div>  
                <div class="d-flex justify-content-center" name ="actionProduit">
                    <h1><button class="btn btn-primary" type="submit" onclick="verif();">Enregistrer</button></h1>
                    <h1><a class="btn btn-primary ml-3"   href="<?= base_url("index.php/AdminStJust/listecontactsmairie")?>">Retour</a></h1>
                </div>

    </form>

<script>
//vérifie si on envoi ou non le formulaire 
    function verif(){ 
//Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir modifier cet enregistrement ?");

    if (resultat==false){
        alert("Vous avez annulé les modifications \nAucune modification ne sera apportée à cet enregistrement !");
        //annule l'évènement par défaut ... SUBMIT vers "script_modif.php"
        event.preventDefault();    
    }
}
</script>

<br>

   
</div>   
</div>

<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>


<?php } 

$_SESSION['messnom']="";
unset( $_SESSION['messnom']); 

?>