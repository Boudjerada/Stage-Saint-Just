
<?php if (isset($_SESSION['log'])){?> 

<div id="image">
        
        <div class="table-responsive"> <!--tableau responsive-->
        <table class="table table-hover table-bordered">

            <thead>
                <tr class="table-active">
                    <th><h3 class="d-flex justify-content-center">Fonction</h3></th>
                    <th><h3 class="d-flex justify-content-center">Téléphone</h3></th>
                    <th><h3 class="d-flex justify-content-center">Email</h3></th>
                    <th><h3 class="d-flex justify-content-center">Modification</h3></th>
                    <th><h3 class="d-flex justify-content-center">Suppression</h3></th>
                </tr>
            <thead>
            <tbody>

        <?php foreach ($association as $row){
                echo "<tr>";
                    echo "<th class='table-warning'>"."<p class='d-flex justify-content-center'>".$row->ass_nom."</p>"."</th>";
                    echo "<th>"."<p class='d-flex justify-content-center'>".$row->ass_tel."</p>"."</th>";
                    echo "<th>"."<p class='d-flex justify-content-center'>".$row->ass_mail."</p>"."</th>";?>
                    <th class='table-warning'><a  class="d-flex justify-content-center" href="<?= base_url('index.php/AdminStJust/modifassoc/'.$row->ass_id);?>">Modifier</a></th>
                    <th class='table-warning'><a class="d-flex justify-content-center" href="<?= base_url('index.php/AdminStJust/suppassoc/'.$row->ass_id);?>">Supprimer</a></th>
                  </tr>
      <?php  }
        ?>

            </tbody>
        </table>
    </div>

    <br>

    <div class="row"> 
        <div class="col-12  d-flex justify-content-center">
            
            <h1><a class="btn btn-success" href="<?= base_url("index.php/AdminStJust/ajoutassoc");?>">Nouvel Enregistrement</a></h1>
            <h1><a class="btn btn-success ml-3" href="<?= base_url("index.php/AdminStJust/accueil");?>">Retour</a></h1>
          
        </div>
    </div>

    <br>

</div>
</div>

<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>


<?php } ?>