<?php if (isset($_SESSION['log'])){?>
    
    <div id="image">
    <br>

    <div class="row">
        <div class="col-12">
            <h2 class="d-flex justify-content-center"><Font color="blue">Association</font></h2>
            <h2 class="d-flex justify-content-center"><Font color="blue">Ajout cordonnées</font></h2>
            
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
            <img src="<?php echo base_url("assets/images/MairieSJ/maire.jpg");?>" height="300" width="300" alt="Image responsive" title="Maire"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>
    
 <br>
   
    <?php echo form_open(); ?>
                <div class="form-group">
                   
                    <label for="ass_nom"><b>Nom Association :</b></label><input type="text" class="form-control" name="ass_nom" id="ass_nom" value="<?php echo set_value('ass_nom');?>">
                    <?php echo form_error('ass_nom'); // affiche l'erreur du champs nom obligatoire?>
                    
                    <label for="ass_tel"><b>Téléphone Association:</b></label><input type="text" class="form-control" name="ass_tel" id="ass_tel" value="<?php echo set_value('ass_tel');?>">
                    
                    <label for="ass_mail"><b>Email Association :</b></label><input type="text" class="form-control" name="ass_mail" id="ass_mail" value="<?php echo set_value('ass_mail');?>">
                    <?php echo form_error('ass_mail'); // affiche l'erreur du champs mail niveau syntaxique?>
                
                </div>  
                <br>
                <div class="d-flex justify-content-center" name ="actionProduit">
                    <h1><button class="btn btn-primary" type="submit" onclick="verif();">Enregistrer</button></h1>
                    <h1><a class="btn btn-primary ml-3"   href="<?= base_url("index.php/AdminStJust/listecontactassociation");?>">Retour</a></h1>
                </div>

    </form>

<br>
<br>
<br>

<script>
//vérifie si on envoi ou non le formulaire 
    function verif(){ 
//Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir modifier cet enregistrement ?");

    if (resultat==false){
        alert("Vous avez annulé l'enregistrement \nAucune modification ne sera apportée à la base association !");
        //annule l'évènement par défaut ... SUBMIT vers "script_modif.php"
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

<?php } ?>