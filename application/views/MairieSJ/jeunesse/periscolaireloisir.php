<div id="jeun"> 

    <div class="row">   
        <div class="col-12 d-flex justify-content-center mt-4">
            <h1>Accueil périscolaire et de loisir</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 d-flex justify-content-around  mt-4">
            <img src="<?php echo base_url("assets/images/MairieSJ/peri2.png");?>"  class="w-25"  alt="Image responsive" title="Image periscolaire"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
            <img src="<?php echo base_url("assets/images/MairieSJ/peri3.png");?>"  class="w-25"  alt="Image responsive" title="Image periscolaire"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
            <img src="<?php echo base_url("assets/images/MairieSJ/peri4.png");?>"  class="w-25"  alt="Image responsive" title="Image periscolaire"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-12">
            <a class="btn btn-secondary d-flex justify-content-center" href="<?php echo base_url("periscolaire.pdf");?>"  target="_blank"><FONT COLOR="red"><h4>Télécharger dossier d'inscription (Un seul dossier valable de septembre à fin août pour les 2 entités)</FONT></h4></a> 
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-12 col-sm-4">
            <h2 class='d-flex justify-content-center'><button id="btn1" class="btn-lg  btn-primary" >INFO PERISCOLAIRE</button></h2>
        </div>
        <div class="col-12 col-sm-4">
            <h2 class='d-flex justify-content-center'><button id="btn2" class="btn-lg  btn-primary" >INFOS ACCUEIL DE LOISIRS</button></h2>
        </div>
        <div class="col-12 col-sm-4">
            <h2 class='d-flex justify-content-center'><button id="btn3" class="btn-lg  btn-primary" >CONTACT DES STRUCTURES D'ACCUEIL</button></h2>
        </div>
    </div>

    <br>

    <div id="div1"></div>

    <div class="row"> 
        <div class="col-12  d-flex justify-content-center mb-3 mt-4">
            <a class="btn-lg btn-success" href="<?= base_url("index.php/MairieSJ/jeunesse");?>"><b>Retour</b></a>
        </div>
    </div>
    




</div>

</div>



<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src='<?php echo base_url("assets/js/SJ/jeun.js");?>'></script>


</body>
</html>