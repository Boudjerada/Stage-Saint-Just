    
    <style>
    #eve{
    background-color: rgb(170, 180, 23);
    }
    </style>

<div id="eve"> 
    
    <br>    
    
    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-3">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie.png");?>"  alt="Image responsive" title="Image mairie"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>

    <br>

    <div class="table-responsive"> <!--tableau responsive-->
        <table class="table table-hover table-bordered">

            <thead>
                <tr class="table-active">
                    <th><h3 class="d-flex justify-content-center">Date</h3></th>
                    <th><h3 class="d-flex justify-content-center">Manifestation</h3></th>
                    <th><h3 class="d-flex justify-content-center">Organisation</h3></th>
                    <th><h3 class="d-flex justify-content-center">Mail</h3></th>
                    <th><h3 class="d-flex justify-content-center">Téléphone</h3></th>
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
                  
                  </tr>
      <?php  }
        ?>

            </tbody>
        </table>
    </div>

    <br>



    <div class="row"> 
        <div class="col-12  d-flex justify-content-center mb-3 mt-4">
            <a class="btn-lg btn-success" href="<?= base_url("index.php/MairieSJ/accueilagenda");?>"><b>Retour</b></a>
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