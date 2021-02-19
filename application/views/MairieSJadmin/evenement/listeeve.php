
    <div class="table-responsive"> <!--tableau responsive-->
        <table class="table table-hover table-bordered">

            <thead>
                <tr class="table-active">
                    <th><h3>Date</h3></th>
                    <th><h3>Manifestation</h3></th>
                    <th><h3>Organisation</h3></th>
                    <th><h3>contact</h3></th>
                    <th><h3>Modifier</h3></th>
                    <th><h3>Supprimer</h3></th>

                </tr>
            <thead>
            <tbody>

        <?php foreach ($evenement as $row){
                echo "<tr>";
                    echo "<th>".$row->eve_date."</th>";
                    echo "<th>".$row->eve_manif."</th>";
                    echo "<th>".$row->eve_Orga."</th>";
                    echo "<th>".$row->eve_contact."</th>";?>
                    <th><a  href="<?= base_url('index.php/AdminStJust/modifeve/'.$row->eve_id);?>">Modifier</a></th>
                    <th><a  href="<?= base_url('index.php/AdminStJust/suppeve/'.$row->eve_id);?>">Supprimer</a></th>
                  </tr>
      <?php  }
        ?>

            </tbody>
        </table>
    </div>

    <br>

    <div class="row"> 
        <div class="col-12  d-flex justify-content-center">
            
            <h4><a class="btn-success" href="<?= base_url("index.php/AdminStJust/ajouteve");?>">Nouvel Enregistrement</a></h4>
            <h4><a class="btn-success ml-5" href="<?= base_url("index.php/AdminStJust/accueil");?>">Retour</a></h4>
          
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