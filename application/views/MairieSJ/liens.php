
   
    <div id="intro" class="row"> 
        <div class="col-12">
            <h3 class="d-flex justify-content-center"><FONT COLOR="black">Bienvenue à la Mairie de votre ville Saint Just en Chaussée</FONT></h3>
        </div>
    </div>
    

    <div id="liens-vert" class="row">
        
        <div  class="col-5">
        <br>
        <br>
            <a class="d-flex justify-content-center mt-2" href="http://saintjustenchaussee.groupehlc.com/" target="_blank">
                <img src="<?php echo base_url("assets/images/MairieSJ/logomairie");?>" class="w-25" alt="Image responsive" title="Image promotion">
            </a>
        </div>
        <div class="col-7">
        <br>
        <br>
            <a class="d-flex justify-content-center" href="https://www.gouvernement.fr/info-coronavirus" target="_blank">
                <img src="<?php echo base_url("assets/images/MairieSJ/covid19");?>" alt="Image responsive" class="w-25" title="Image promotion">
            </a>
        </div>
    </div>
    
    <div id="liens-vert" class="row">
        <div class="col-12">
            <h6>Protégez-vous et protégez les autres en vous tenant informé et en prenant les précautions appropriées. Suivez les conseils des autorités sanitaires. Les masques peuvent contribuer à éviter que les personnes qui les portent transmettent le virus à d'autres personnes. Le seul port du masque ne protège pas contre la COVID-19. Il doit être associé à des mesures de distanciation physique et d'hygiène des mains.</h6>
        </div>
    </div>
    


    <div id="liens-bleu" class="row"> 
        
        <div class="col-12 d-flex justify-content-center">
        
            <a id="ref" href="https://www.caf.fr/" target="_blank">
                <img src="<?php echo base_url("assets/images/MairieSJ/caf");?>" class="w-50" alt="Image responsive" title="Image promotion">
            </a>
            <a id="ref" href="https://www.pole-emploi.fr/accueil/" target="_blank">
                <img src="<?php echo base_url("assets/images/MairieSJ/poleemploi");?>" class="w-50" alt="Image responsive" title="Image promotion">
            </a>
            <a id="ref" href="http://www.cc-plateaupicard.fr/" target="_blank">
                <img src="<?php echo base_url("assets/images/MairieSJ/plateaupicard");?>" class="w-50" alt="Image responsive" title="Image promotion">
            </a>
            <a id="ref" href="https://www.service-public.fr/" target="_blank">
                <img src="<?php echo base_url("assets/images/MairieSJ/servicepublic");?>"  class="w-50" alt="Image responsive" title="Image promotion">
            </a>
        </div>

    </div>
    
 
    
    <div id="tab" class="row"> 
        <div class="col-12">
            <div class="table-responsive">  <!--tableau responsive-->
                <table class="table table-sm-responsive">
                    <tbody>
                        <tr>
                            <th><h1><a class="btn-danger  d-flex justify-content-center" href="">Documents Administratifs</a></h1></th>
                            <th><h1><a class="btn-danger d-flex justify-content-center" href="<?= base_url("index.php/MairieSJ/contact");?>">Contact</a></h1></th>
                            <th><h1><a class="btn-danger d-flex justify-content-center" href="<?= base_url("index.php/MairieSJ/association");?>">Association</th>
                        </tr>
                        <tr>   
                            <th><h1><a class="btn-info d-flex justify-content-center" href="<?= base_url("index.php/MairieSJ/cantine");?>">Cantine</a></h1></th>
                            <th><h1><a class="btn-info d-flex justify-content-center" href="http://saintjustenchaussee.groupehlc.com/rubrique.php?rub=119" target="_blank">Médiathèque</a></h1></th>
                            <th><h1><a class="btn-info d-flex justify-content-center" href="">Jeunesse</a></h1></th>
                        </tr> 
                        <tr>   
                            <th><h1><a class="btn-secondary d-flex justify-content-center" href="<?= base_url("index.php/MairieSJ/accueilAgenda");?>">Agenda</a></h1></th>
                            <th><h1><a class="btn-secondary d-flex justify-content-center" href="">CCAS</a></h1></th>
                            <th><h1><a class="btn-secondary d-flex justify-content-center" href="<?php echo base_url("PLAN DE LA VILLE.pdf");?>" target="_blank">Plan de la ville</a></h1></th>
                        </tr>
                        <tr>   
                            <th><h1><a class="btn-success d-flex justify-content-center" href="<?= base_url("index.php/MairieSJ/police");?>">Police municipal</a></h1></th>
                            <th><h1><a class="btn-success d-flex justify-content-center" href="<?= base_url("index.php/MairieSJ/environnement");?>">Environnement</a></h1></th>
                        </th>   
                    </tbody>
                </table>
            </div>
        </div>
    </div>

     <div class="row">
        <div id ="nav" class="col-12 d-flex justify-content-center">
<!--navbar-expand-sm qui indique à partir de quelle dimension (ici sm, donc à plus de 576px) la barre de navigation sera visible entièrement au lieu d'afficher le bouton hamburger.-->
            <nav  class="navbar navbar-expand-sm  navbar-light"> <!--couleur de la barre de navigation-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                    <div class="collapse navbar-collapse" id="collapsibleNavbar1">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-5 mt-3">
                                <p><b>Téléphone : </b>03 44 19 29 29</p>
                            </li>
                            <li class="nav-item mr-5 mt-3">
                                <p><b>Site web : </b>https://saintjustenchaussee.groupehlc.com</p>
                            </li>
                            <li class="nav-item m-3">
                                <p><b>Email : </b>com@mairiesaintjustenchaussee.fr</p>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>
    </div>



</div>

<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>