<?php if (isset($_SESSION['log'])){?>
    
<br>
    
<div class="row">
    <div class="col-12 d-flex justify-content-center">
        <img src="<?php echo base_url("assets/images/MairieSJ/logomairie");?>"  alt="Image responsive" title="Image promotion"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
    </div>
</div>
    
<br>
<br>

<h1 class="d-flex justify-content-center"><FONT COLOR="blue"> Planning de réservation</FONT></h1>

<br>
<br>
    
  
    <?php echo form_open(); ?>
                <div class="form-group">
                    
                    <label for="pla_id"><b>Identifiant :</b></label><input type="text" class="form-control" name="pla_id" id="pla_id" value="<?php echo $planning->pla_id?>" Readonly>
                    
                    <label for="pla_mois"><b>Mois :</b></label><input type="text" class="form-control" name="pla_mois" id="pla_mois" value="<?php echo $planning->pla_mois?>" Readonly>

                    <label for="pla_annee"><b>Année :</b></label><input type="text" class="form-control" name="pla_annee" id="pla_annee" value="<?php echo set_value('pla_annee', $planning->pla_annee);?>">
                    <?php echo form_error('pla_annee'); // affiche l'erreur du champs nom obligatoire?>

                    <label for="pla_date"><b>Date limite :</b></label><input type="text" class="form-control" name="pla_date" id="pla_date" value="<?php echo set_value('pla_date', $planning->pla_date);?>">
                    <?php echo form_error('pla_date'); // affiche l'erreur du champs nom obligatoire?>
                    
                    
                    
                
                </div>  
                <div class="d-flex justify-content-center" name ="actionProduit">
                    <h1><button class="btn btn-primary ml-1" type="submit" onclick="verif();">Modifier</button></h1>
                    <h1><a class="btn btn-primary ml-2"   href="<?= base_url("index.php/AdminStJust/planning");?>">Retour</a></h1>
                </div>

    </form>

<script>
//vérifie si on envoi ou non le formulaire 
    function verif(){ 
//Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir modifier cette enregistrement ?");

    if (resultat==false){
        alert("Vous avez annulé les modifications \nAucune modification ne sera apportée à cette enregistrement !");
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