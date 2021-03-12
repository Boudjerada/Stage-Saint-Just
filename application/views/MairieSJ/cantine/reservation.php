<div id="cantine">

<br>  
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie.png");?>"  alt="Image responsive" title="Image promotion"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>

<br>

<div class="table-responsive"> <!--tableau responsive-->
    
    <table class="table table-hover table-bordered">

        <thead>
            <tr class="table-active">
                
                <th><h2 class="d-flex justify-content-center"><FONT color="black">Saint Justois</FONT></h2></th>
                <th><h2 class="d-flex justify-content-center"><FONT color="black">Extérieur</FONT></h2></th>
                
            </tr>
        <thead>
        <tbody>

            <?php foreach ($reservation as $row){
                $stjust= $row->res_mois. "_st_just";
                $ext=$row->res_mois."_EXT";
                ?>
               
            <tr>
                <th><h3><a class="d-flex justify-content-center text-dark" href="<?php echo base_url("Cantine/FicheReservationCantine/$stjust.pdf");?>" target="_blank"><FONT color="blue"><?=$stjust;?></FONT></a></h3></th>
                <th><h3><a class="d-flex justify-content-center text-dark" href="<?php echo base_url("Cantine/FicheReservationCantine/$ext.pdf");?>"  target="_blank"><FONT color="blue"><?=$ext;?></FONT></a></h3></th>
            </tr>
        
        <?php } ?>
        
        </tbody>
    </table>
</div>

<div class="row"> 
    <div class="col-12  d-flex justify-content-center mb-3 mt-4">
         <a class="btn-lg btn-success" href="<?= base_url("index.php/MairieSJ/cantine");?>"><b>Retour</b></a>
    </div>
</div>

</div>

</div>


<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


</body>
</html>