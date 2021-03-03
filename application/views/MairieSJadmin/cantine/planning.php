<?php if (isset($_SESSION['log'])){?>

<h1 class="d-flex justify-content-center"><FONT COLOR="blue"> Planning de réservation</FONT></h1>

<br>

<div class="table-responsive"> <!--tableau responsive-->
    
    <table class="table table-hover table-bordered">

        <thead>
            <tr class="table-active">
                <th><h3 class="d-flex justify-content-center">Année</h3></th>
                <th><h3 class="d-flex justify-content-center">Mois</h3></th>
                <th><h3 class="d-flex justify-content-center">Je réserve mes repas ou modifie jusqu'au</h3></th>
                <th><h3 class="d-flex justify-content-center">Modification</h3></th>
            </tr>
        <thead>
        <tbody>
        
        <?php foreach ($planning as $row){?>
            
            <tr>
                <th><h3 class="d-flex justify-content-center"><?= $row->pla_annee ?></h3></th>
                <th><h3 class="d-flex justify-content-center"><?= $row->pla_mois ?></h3></th>
                <th><h3 class="d-flex justify-content-center"><?= $row->pla_date ?></h3></th>
                <th><h3 class="d-flex justify-content-center"><a class="btn-success" href="<?= base_url('index.php/AdminStJust/modifPlanning/'.$row->pla_id);?>">Modifier</a></h3></th>
            </tr>

        <?php } ?>
        
        </tbody>
    </table>
</div>


<br>
<br>

<div class="row"> 
    <div class="col-12  d-flex justify-content-center">
        <h1><a class="btn btn-success" href="<?= base_url("index.php/AdminStJust/accueil");?>">Retour</a></h1>
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

<?php } ?>