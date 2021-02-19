
        <br>
                    <div id="RGPD">
                    Les informations recueillies sont enregistrées dans un fichier informatisé par le responsable informatique de la mairie de Saint Just   
                    dans le but de permettre aux administrés de la ville de pouvoir avoir une interface de travail sur les différents secteurs d'activités de la commune.<br>
                    Elles sont conservées le temps de votre mandat, contrat de travail à la mairie.<br>   
                    Ces informations sont déstinés à Jeremy Delicque, responsable informatique de la mairie. En aucun cas, Monsieur Delicque a accés à vôtre mot de passe une fois modifié.<br><br>

                    Conformément aux lois « Informatique & Liberté » et « RGPD », vous pouvez exercer vos droits d’accès à vos données, de rectification, d’effacement, d’opposition, de limitation ou de portabilité en contactant : 
                    Monsieur Delicque Jeremy.<br><br>

                    En cas de différend, vous avez le droit d’introduire une réclamation (plainte) auprès de la Cnil.<br>
                    En cas de manquement à ces obligations, les citoyens pourront se tourner vers l'autorité référente (Commission nationale de l'informatique et des libertés ou Cnil en France). Les sanctions encourues sont assez lourdes puisqu'elles peuvent aller jusqu'à 20 millions d'euros.<br>
                    
                    </div>
                    <a href="#" onclick="voirsuite();" id="voirsuite">Voir la suite...</a>
                    <a href="#" onclick="replier();" style="display:none;" id="replier">Replier...</a>
        

<br>

    <h1 class='d-flex justify-content-center'><font color="green">Espace administration</font></h1>
    
    <br>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie");?>"  alt="Image responsive" title="Image promotion"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>
    
    <br>
    <br>
    
    <div class="row"> 
        <div class="col-12">
            <h6>Liens de mise à jour des contacts :
            <br> 
                <a class='ml-2' href="<?= base_url("index.php/AdminStJust/listecontactsmairie");?>">Contact Service Mairie</a>
                <a class='ml-2' href="<?= base_url("index.php/AdminStJust/listecontactassociation");?>">Contact Association</a>
            </h6>
        </div>
    </div>

    <br>

    <div class="row"> 
        <div class="col-12">
            <h6>Agenda :
            <br> 
                <a class='ml-2' href="<?= base_url("index.php/AdminStJust/evenement");?>">Manifestation</a>
                <a class='ml-2' href="">Permanence des élus</a>
                <a class='ml-2' href="">Permanence diverses</a>
            </h6>
        </div>
    </div>

    <br>

    <div class="row"> 
        <div class="col-12">
            <h6>Cantine :
            <br> 
                <a class='ml-2' href="<?= base_url("index.php/AdminStJust/planning");?>">Planning de réservation</a>
                <a class='ml-2' href="<?= base_url("index.php/AdminStJust/menu");?>">Menu</a>
                <a class='ml-2' href="<?= base_url("index.php/AdminStJust/reservation");?>">Fiche de réservation</a>
            </h6>
        </div>
    </div>

</div>

<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="<?php echo base_url("assets/js/SJ/AdminSJ.js");?>"></script>
</body>
</html>