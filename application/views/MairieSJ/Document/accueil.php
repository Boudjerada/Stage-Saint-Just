    
    <style>
    #bg{
    background-color: rgb(170, 180, 23);
    }
    </style>

<div id="bg"> 
    
    <br>    
    
    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-3">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie.png");?>"  alt="Image responsive" title="Image mairie"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>

    <br>

    <div class="row mt-3">
        <div class="col-12 d-flex justify-content-around">
            <img src="<?php echo base_url("assets/images/MairieSJ/CI.jpg");?>"  class="w-25" alt="Image responsive" title="Image carte identité"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
            
            <img src="<?php echo base_url("assets/images/MairieSJ/LF.jpg");?>" class="w-25" alt="Image responsive" title="Image livret de famille"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->

            <img src="<?php echo base_url("assets/images/MairieSJ/PI.jpg");?>"  class="w-25" alt="Image responsive" title="Image carte identité"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
           
        </div>
    </div>

    <br>

    <div class="row mt-5">
        <div class="col-12 col-sm-3 d-flex justify-content-center mb-2">
            <a class="btn-lg btn-primary" href="<?= base_url("index.php/MairieSJ/CIetP");?>">Carte identité / Passeport</a>
        </div>
     
        <div class="col-12 col-sm-3 d-flex justify-content-center mb-2">
            <button class="btn-lg btn-primary" id="button1">Certificat d'immatriculation de véhicule</button>
        </div>
       
        <div class="col-12 col-sm-3 d-flex justify-content-center mb-2">
            <button class="btn-lg btn-primary" id="button2">Demande de Livret de famille</button>
        </div>
      
        <div class="col-12 col-sm-3 d-flex justify-content-center">
            <button class="btn-lg btn-primary" id="button3">Le Recensement Militaire</button>
        </div>
    </div>

    <br>

    <div id="CIV"></div>


<div class="row"> 
    <div class="col-12  d-flex justify-content-center mb-3 mt-4">
        <a class="btn-lg btn-success" href="<?= base_url("index.php/MairieSJ/liens");?>"><b>Retour</b></a>
    </div>
</div>




</div>
</div>

<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo base_url("assets/js/SJ/docAdmin.js");?>"></script>
</body>
</html>