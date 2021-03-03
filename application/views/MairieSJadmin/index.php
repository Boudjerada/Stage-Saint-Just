

    <br>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h2 class="col-12 d-flex justify-content-center"><Font color="blue">Espace connexion des administrés de la ville de Saint Just en Chaussée</font></h2>
        </div>
    </div>

    <br>
    <br>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?php echo base_url("assets/images/MairieSJ/logomairie");?>"  alt="Image responsive" title="Image promotion"> <!--image esponsive s'adapte progressivement à la taille de l'ecran sans disparaitre-->
        </div>
    </div>

    <br>

    <?php echo form_open(); ?>
        <div class="form-group">
            <label for="Log"><b>Login</b></label><input type="text" class="form-control" name="Log" id="Log" value="<?php  echo set_value('Log');?>" placeholder="Veuillez saisir vôtre login" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
            <?php echo form_error('Log'); // affiche l'erreur du champs concerné?>
            
            <br>
            <?php if  (isset ($_SESSION["messlog2"])){?> <span id="alerte-log" class="alert alert-danger"><?=$_SESSION['messlog2'];?></span><?php } ?>
                
            <br>
                
            <label for="motdepasse"><b>Mot de passe</b></label><input type="password" class="form-control" name="motdepasse" id="motdepasse"  placeholder="Veuillez saisir vôtre mot de passe de connexion" > <!--formcontrol pour mettre la zone de saisie en dessous du titre du champs-->
            <br>
            <?php if  (isset ($_SESSION["messlog3"])){?> <span id="alerte-log" class="alert alert-danger"><?=$_SESSION['messlog3'];?></span><?php } ?>
        </div>
            
        <br>
        <div class="d-flex justify-content-center" name = "actionauthentification">
            
            <button class="btn btn-primary" type="submit" name="submit" id ="submit" value="1" data-toggle="modal" data-target="#exampleModal" required>Connexion</button>


        </div>
    </form>

    <br>

</div>

<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>



<?php


$_SESSION["messlog2"]="";
$_SESSION["messlog3"]="";
$_SESSION['log']="";
$_SESSION['status']="";

unset($_SESSION["messlog2"]);
unset($_SESSION["messlog3"]);
unset($_SESSION['log']);
unset($_SESSION['status']);

session_destroy();


?>