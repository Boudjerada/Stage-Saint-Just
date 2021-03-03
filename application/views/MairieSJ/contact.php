
<br>

<div id="cont_contact" > <!--container global de la page-->

    <br>
    <br>

    <h1 class="d-flex justify-content-center"><font COLOR="black">Liste de Contacts utiles</h1></font>

<br>

<div class="row"> 
    <div class="col-12">
        <div class="form-group">
            <h3 class="d-flex justify-content-center"><label for="pla_id"><b><FONT color="blue">Choisir le service concerné :</FONT></b></label></h3>
        </div>
    </div>
</div>


<div class="row ml-2 mr-2"> 
    <div class="col-12  bg-success ">

    <br>

        <select class="form-control  bg-success text-dark" id="select1" >
            <option class="text-dark" value="contact1">SERVICE MAIRIE</option>
            <option class="text-dark" value="contact3">DECHETTERIE</option>
            <option class="text-dark" value="contact4">GENDARMERIE</option>
            <option class="text-dark" value="contact5">POMPIERS</option>
            <option class="text-dark" value="contact6">MEDECINS GENERALISTES</option>
            <option class="text-dark "value="contact7">PHARMACIES</option>
            <option class="text-dark" value="contact8">INFIRMIER(E)S</option>
            <option class="text-dark" value="contact9">SAGES-FEMMES</option>
            <option class="text-dark" value="contact10">LABORATOIRE</option>n>
            <option class="text-dark" value="contact11">DENTISTES</option>
            <option class="text-dark" value="contact12">DIETETICIENNE</option>
            <option class="text-dark" value="contact13">AMBULANCES</option>
            <option class="text-dark" value="contact14">MASSEURS KINE</option>
            <option class="text-dark" value="contact15">CONSEILLERE CONJUGALE ET FAMILIALE</option>
            <option class="text-dark" value="contact16">PSYCHOLOGUE</option>
            <option class="text-dark" value="contact17">OSTEOPATHE</option>
            <option class="text-dark" value="contact18">PEDICURES PODOLOGUES</option>
            <option class="text-dark" value="contact19">CLINIQUE VETERINAIRE</option>
        </select>

    <br>

    </div>
</div>


<br>

<div id="div1"></div>
    
<br>
    
    <div class="row"> 
        <div class="col-12  d-flex justify-content-center">
            <h1><a class="btn-success" href="<?= base_url("index.php/MairieSJ/liens");?>">Retour</a></h1>
        </div>
    </div>

</div>
</div>


<!--fichiers Javascript nécessaires à Bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="<?php echo base_url("assets/js/SJ/script_contact.js");?>"></script>
</body>
</html>


