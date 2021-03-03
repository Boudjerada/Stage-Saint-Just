<?php if (isset($_SESSION['log'])){?> 
    
    <br>
    
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie");?>"  alt="Image responsive" title="Image promotion"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>
    
    <br>
    <br>
    
  
    <?php echo form_open(); ?>
                <div class="form-group">
                    
                    <label for="eve_id"><b>Identifiant Manifestation :</b></label><input type="text" class="form-control" name="eve_id" id="eve_id" value="<?php echo $evenement->eve_id?>" Readonly>
                    
                    <label for="eve_date"><b>Date Manifestation :</b></label><input type="text" class="form-control" name="eve_date" id="eve_date" value="<?php echo set_value('eve_date', $evenement->eve_date);?>">
                    <?php echo form_error('eve_date'); // affiche l'erreur du champs nom obligatoire?>

                    <label for="eve_manif"><b>Nom Manifestation :</b></label><input type="text" class="form-control" name="eve_manif" id="eve_manif" value="<?php echo set_value('eve_manif', $evenement->eve_manif);?>">
                    <?php echo form_error('eve_manif'); // affiche l'erreur du champs nom obligatoire?>
                    
                    <label for="eve_Orga"><b>Organisateur Manifestation :</b></label><input type="text" class="form-control" name="eve_Orga" id="eve_Orga" value="<?php echo set_value('eve_Orga', $evenement->eve_Orga);?>">
                    <?php echo form_error('eve_Orga'); // affiche l'erreur du champs nom obligatoire?>
                    
                    <label for="eve_contact"><b>Mail de l'organisateur :</b></label><input type="text" class="form-control" name="eve_contact" id="eve_contact" value="<?php echo set_value('eve_contact', $evenement->eve_contact);?>">
                    <?php echo form_error('eve_contact'); // affiche l'erreur du champs nom obligatoire?>

                    <label for="eve_tel"><b>Téléphone de l'organisateur :</b></label><input type="text" class="form-control" name="eve_tel" id="eve_tel" value="<?php echo set_value('eve_tel', $evenement->eve_tel);?>">
                    <?php echo form_error('eve_tel'); // affiche l'erreur du champs nom obligatoire?>
                    
                
                </div>  
                <div class="d-flex justify-content-center" name ="actionProduit">
                    <h1><button class="btn btn-primary" type="submit" onclick="verif();">Enregistrer</button></h1>
                    <h1><a class="btn btn-primary ml-3"   href="<?= base_url("index.php/AdminStJust/evenement");?>">Retour</a></h1>
                </div>

    </form>

<script>
//vérifie si on envoi ou non le formulaire 
    function verif(){ 
//Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir modifier cette manifestation ?");

    if (resultat==false){
        alert("Vous avez annulé les modifications \nAucune modification ne sera apportée à cette manifestation !");
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