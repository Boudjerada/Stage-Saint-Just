<?php if (isset($_SESSION['log'])){?> 
    
    <br>
    
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie");?>"  alt="Image responsive" title="Image promotion"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>
    
    <br>
    <br>


            <h1 class="d-flex justify-content-center"><b><?=$evenement->eve_manif?></b></h1>
            <br>
            <div class="d-flex justify-content-center">
                <h4>Etes vous sûr de vouloir supprimer&nbsp<b><?=$evenement->eve_manif?></b>&nbspde la base de données ?<h4>
            </div>

            <br>
            <br>
           
        <?php echo form_open(); ?>
        
                <input type="hidden" name="eve_id" value="<?php echo $evenement->eve_id;?>">
                
                <div class="d-flex justify-content-center" name = actionassociation>    
                    <h1><button class="btn btn-primary" type="submit" onclick="verif();">Supprimer</button></h1>
                    <h1><a class="btn btn-primary ml-3"   href="<?= base_url("index.php/AdminStJust/evenement")?>">Retour</a></h1>
                </div>
              
        </form>

        <br>

<script>
//vérifie si on envoit ou non le formulaire à "script_modif.php"
function verif(){ 
    //Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir supprimer cet enregistrement ?");

    //alert("retour :"+ resultat);

    if (resultat==false){
        alert("Vous avez annulé la supression \nAucune suppression ne sera apportée à la base!");
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