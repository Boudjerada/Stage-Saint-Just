<?php
    if (isset ($_SESSION["resok"])){
        echo' <script> alert("Demande enregistré, nous vous contacterons prochainement"); </script>';
    }
?>

    <br>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h2 class="col-12 d-flex justify-content-center"><Font color="blue">Demande réservation salle</font></h2>
        </div>
    </div>

    <br>
    <br>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie.png");?>"  alt="Image responsive" title="Image promotion"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>

    <br>

    <h2 class="d-flex justify-content-center"><b>Formulaire de demande</b></h2>  
        <p class="ml-3"><Font color="red">Tout les champs sont obligatoires</Font></p>
        <?php echo form_open(); ?>
            <div class="form-group">
                <label for="nom"><b>Nom</b></label><input type="text" class="form-control" name="nom" id="us_nom" value="<?=set_value('nom');?>" placeholder="Veuillez saisir votre nom" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <?php echo form_error('nom'); // affiche l'erreur du champs concerné?>
                <br>
                <label for="prenom"><b>Prenom</b></label><input type="text" class="form-control" name="prenom" id="us_prenom" value="<?=set_value('prenom');?>" placeholder="Veuillez saisir votre prenom" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <?php echo form_error('prenom'); // affiche l'erreur du champs concerné?>
                <br>
                <label for="mail"><b>E-mail</b></label><input type="text" class="form-control" name="mail" id="mail" value="<?=set_value('mail'); ?>" placeholder="Veuillez saisir votre mail" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <?php echo form_error('mail'); // affiche l'erreur du champs concerné?>
                <br>
                <label for="tel"><b>Téléphone</b></label><input type="text" class="form-control" name="tel" id="tel" value="<?=set_value('tel'); ?>" placeholder="Veuillez saisir votre telephone" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
                <?php echo form_error('tel'); // affiche l'erreur du champs concerné?>
                <br>
                <label for="salle"><b>Salle souhaité</b></label>
                    <select class="form-control" name="salle" >
                        <option value="Mairie Annexe">Mairie Annexe</option>
                        <option value="Salle des fêtes">Salles des fêtes</option>
                        <option value="Opus">Opus</option>
                        <option value="Salle de la Landre">Salle de la Landre</option>
                    </select>
                
                <div class="form-check ml-3 mt-3">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="acceptation" required>
                    <label class="form-check-label" for="acceptation">J'accepte le traitement informatique de ce formulaire</label>
                </div>
            </div>
                
            <div class="d-flex justify-content-center" name = "actioninscription">
                <button class="btn btn-dark" type="submit"  onclick="verif();">Envoyer</button>
                <a  class="btn btn-primary ml-2" href="<?= base_url("index.php/MairieSJ/association");?>">Retour</a>
            </div>
        </form>

    <br>
    

<script>
//demande si on envoit ou non le formulaire au controleur
function verif(){ 
    //Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir valider votre demande?");
    
    if (resultat==false){
        alert("Vous avez annulé votre demande !");
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

//Detruction des variables de session qui ne sont plus nécessaires

$_SESSION["resok"]="";

unset($_SESSION["resok"]);
