<div id="asso"> <!--container global de la page-->

    <br>
    <br>

    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-1">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie.png");?>"  alt="Image responsive" title="Image mairie"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>

    <br>



    <div class="row"> 
        
        <div class="col-12 d-flex justify-content-around">
        
           
                <img src="<?php echo base_url("assets/images/MairieSJ/association1.jpg");?>" class="w-25" alt="Image responsive" title="Image association">
            
                <img src="<?php echo base_url("assets/images/MairieSJ/association2.jpg");?>" class="w-25" alt="Image responsive" title="Image association">
            
                
          
           
        </div>

    </div>


    <br>

    <div class="row"> 
        <div class="co-12 col-sm-4 d-flex justify-content-center mb-2">
            <button id="button2" class="btn-lg btn-primary">Liste Association</button>
        </div>
        <div class="co-12 col-sm-4 d-flex justify-content-center">
            <a href="<?= base_url("index.php/MairieSJ/cinema");?>" class="btn-lg btn-primary mb-2">Cinéma Jeanne Moreau</a>
        </div>
        <div class="co-12 col-sm-4 d-flex justify-content-center">
            <a href="<?= base_url("index.php/MairieSJ/reservationsalle");?>" class="btn-lg btn-primary mb-2">Réservation des salles</a>
        </div>
    </div>

    <div id="div1"></div>
     

    <div class="row"> 
        <div class="col-12  d-flex justify-content-center mb-3">
            <a class="btn-lg btn-success" href="<?= base_url("index.php/MairieSJ/liens");?>"><b>Retour</b></a>
        </div>
    </div>

</div>
</div>


<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="<?php echo base_url("assets/js/SJ/script_contact2.js");?>"></script>
</body>
</html>