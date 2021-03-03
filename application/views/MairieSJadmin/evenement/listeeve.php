<?php if (isset($_SESSION['log'])){?> 


    <div class="table-responsive"> <!--tableau responsive-->
        <table class="table table-hover table-bordered">

            <thead>
                <tr class="table-active">
                    <th><h3 class="d-flex justify-content-center">Date</h3></th>
                    <th><h3 class="d-flex justify-content-center">Manifestation</h3></th>
                    <th><h3 class="d-flex justify-content-center">Organisation</h3></th>
                    <th><h3 class="d-flex justify-content-center">Mail</h3></th>
                    <th><h3 class="d-flex justify-content-center">Téléphone</h3></th>
                    <th><h3 class="d-flex justify-content-center">Modifier</h3></th>
                    <th><h3 class="d-flex justify-content-center">Supprimer</h3></th>

                </tr>
            <thead>
            <tbody>

        <?php foreach ($evenement as $row){
                echo "<tr>";
                    echo "<th>"."<h6 class='d-flex justify-content-center'>"."<b>".$row->eve_date."</b>"."</h6>"."</th>";
                    echo "<th>"."<h6 class='d-flex justify-content-center'>"."<b>".$row->eve_manif."</b>"."</h6>"."</th>";
                    echo "<th>"."<h6 class='d-flex justify-content-center'>"."<b>".$row->eve_Orga."</b>"."</h6>"."</th>";
                    echo "<th>"."<h6 class='d-flex justify-content-center'>"."<b>".$row->eve_contact."</b>"."</h6>"."</th>";
                    echo "<th>"."<h6 class='d-flex justify-content-center'>"."<b>".$row->eve_tel."</b>"."</h6>"."</th>";?>
                    <th><a  class='d-flex justify-content-center' href="<?= base_url('index.php/AdminStJust/modifeve/'.$row->eve_id);?>">Modifier</a></th>
                    <th><a  class='d-flex justify-content-center' href="<?= base_url('index.php/AdminStJust/suppeve/'.$row->eve_id);?>">Supprimer</a></th>
                  </tr>
      <?php  }
        ?>

            </tbody>
        </table>
    </div>

    <br>

    <div class="row"> 
        <div class="col-12  d-flex justify-content-center">
            
            <h2><a class="btn btn-success" href="<?= base_url("index.php/AdminStJust/ajouteve");?>">Nouvel Enregistrement</a></h2>
            <h2><a class="btn btn-success ml-3" href="<?= base_url("index.php/AdminStJust/accueil");?>">Retour</a></h2>
          
        </div>
    </div>

    <br>

</div>

<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>


<?php } ?>