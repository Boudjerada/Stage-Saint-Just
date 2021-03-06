<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MairieSJ extends CI_Controller {

//Page d'accueil
    public function index(){
       
        function compt(){
            // On ouvre le fichier moncompteurjarditou.txt lecture ecriture pointeur au début
            $fichier = fopen("././././compteurBorne.txt",'r+');
            // on lit le nombre indiqué dans ce fichier dans la variable
            $visiteurs = fgets($fichier,255);
            // on ajoute 1 au nombre de visiteurs
            $visiteurs++;
            // on se positionne au début du fichier
            fseek($fichier,0);
            // on écrit le nouveau nombre dans le fichier
            fputs($fichier,$visiteurs);
            // on referme le fichier moncompteur.txt
            fclose($fichier);
            // on indique sur la page le nombre de visiteurs
            //print("$visiteurs personnes sont passées par ici");
        }
        compt();
        
        $this->load->view('MairieSJ/accueil');
    }

//Page de liens accessible via page d'accueil
    public function liens(){

        $head['title']= "Accueil";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/liens');
    }
//-------------------------------------------------------------------------------------------------------------------------------------------

//Lien contact
//Page de base , sélection du contact dont on veut les coordonnées
    public function contact(){

        $head['title']= "Contacts utiles";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/contact');
    }

//chargement via js ajax du contact ou de la liste contact sur la vue contact, chargement dynamique

//Chargement liste contact interne de la mairie 
    public function contact1(){
    
        $this->load->model('MairieSJ_model');
        $data = $this->MairieSJ_model->servicecontact();
        $aView["serviceMairie"] = $data;
        
       
        $this->load->view('MairieSJ/contact/contact1',$aView);
    }

//Chargement contact Décheterrie
    public function contact3(){

        $this->load->view('MairieSJ/contact/contact3');
    }

//Chargement contact Gendarmerie
    public function contact4(){
        $this->load->view('MairieSJ/contact/contact4');
    }

//Chargement contact Pompier
    public function contact5(){
        $this->load->view('MairieSJ/contact/contact5');
    }

//Chargement contact Medecins Generalistes
    public function contact6(){
        $this->load->view('MairieSJ/contact/contact6');
    }

//Chargement contact Pompier
    public function contact7(){
        $this->load->view('MairieSJ/contact/contact7');
    }

//Chargement contact Infirmier
    public function contact8(){
        $this->load->view('MairieSJ/contact/contact8');
    }

//Chargement contact Sages femmes
    public function contact9(){
        $this->load->view('MairieSJ/contact/contact9');
    }

//Chargement contact Laboratoires
    public function contact10(){
        $this->load->view('MairieSJ/contact/contact10');
    }

//Chargement contact Dentiste
    public function contact11(){
        $this->load->view('MairieSJ/contact/contact11');
    }

//Chargement contact Diététicien
    public function contact12(){
        $this->load->view('MairieSJ/contact/contact12');
}
//Chargement contact Ambulance
    public function contact13(){
        $this->load->view('MairieSJ/contact/contact13');
}

//Chargement contact Kiné
    public function contact14(){
        $this->load->view('MairieSJ/contact/contact14');
    }

//Chargement contact Conseillère social
    public function contact15(){
        $this->load->view('MairieSJ/contact/contact15');
    }

//Chargement contact Phychologue
    public function contact16(){
        $this->load->view('MairieSJ/contact/contact16');
    }

//Chargement contact Ostéophate
public function contact17(){
    $this->load->view('MairieSJ/contact/contact17');
}

//Chargement contact Pédicure/Podologue
    public function contact18(){
        $this->load->view('MairieSJ/contact/contact18');
    }

//Chargement contact Vétérinaire
    public function contact19(){
        $this->load->view('MairieSJ/contact/contact19');
    }

//---------------------------------------------------------------------------------------------------------------------------------------

//Lien ASSOCIATION

//Accueil
public function association(){

    $head['title']="Association";

    $this->load->view('header2', $head);
    $this->load->view('MairieSJ/association/association');

}


//Chargement de la liste des associations js ajax
public function contact2(){
    
    $this->load->model('MairieSJ_model');
    $data = $this->MairieSJ_model->association();
    $aView["association"] = $data;

    
    $this->load->view('MairieSJ/contact/contact2',$aView);
}


//Formulaire réservation de salle
public function reservationsalle(){

    $head['title']="Réservation salle";

    if ($this->input->post()) 
    { // 2ème appel de la page: traitement du formulaire

        $data = $this->input->post();

    // Définition du filtre, ici la valeur est obligatoire pour le champ 'ass_nom'
        $this->form_validation->set_rules('nom', 'Nom', 'required', array("required" => "Le champ %s est obligatoire."));
     //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        // Définition du filtre, ici la valeur est obligatoire pour le champ 'ass_nom'
        $this->form_validation->set_rules('prenom', 'Prénom', 'required', array("required" => "Le champ %s est obligatoire."));
     //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    
    // Définition du filtre, ici la syntaxe du mail 
        $this->form_validation->set_rules('mail', 'Mail', 'required|valid_email', array("required" => "Le champ %s est obligatoire.", "valid_email"  => "Le format du %s n'est pas valide"));
     //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>'); 

     // Définition du filtre, ici la valeur est obligatoire pour le champ 'ass_nom'
     $this->form_validation->set_rules('tel', 'Téléphone', 'required', array("required" => "Le champ %s est obligatoire."));
     //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == FALSE)
            { // Echec de la validation, on réaffiche la vue formulaire
                $this->load->view('header2', $head);
                $this->load->view('MairieSJ/association/reservationsalle');

            }
        else
            { 
                
//Envoie Mail inscription

$nom = $this->input->post('nom');
$prenom = $this->input->post('prenom');
$tel = $this->input->post('tel');
$mail = $this->input->post('mail');

$salle = $this->input->post('salle');

$message = "<!DOCTYPE html>
<html lang='fr'> <!--indique la langue dans laquelle la page web est rédigéé aux robots de référencement ou aux logiciels de synthése vocale-->
<!--les balises de la partie head ne sont pas affichées à l'exeption de title-->
<head>
    <!--meta permet de fourni des indications différentes du contenu de la page web -->
    <meta charset='UTF-8'><!--permet de spécifier aux navigateurs l'encodage de la page web, il s'agit là de la valeur standard qui évite les pbs d'affichages des caractères spéciaux-->
    <meta name='viewport' content='width=device-width, initial-scale=1.0',shrink-to-fit=no>
    <title>Réservation salle</title>
    <!--on importe Bootstrap via une URL pointant sur un CDN (un serveur externe hébergeant des fichiers) -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
<style>
html 
{
   font-size: 100%;
}

body 
{
    font-size: 1rem; /* Si html fixé à 100%, 1rem = 16px = taille par défaut de police de Firefox ou Chrome */
}
</style>  
</head>
<body>
<div class='container'>
    <div class='row'>
        <div class='col-12'>
          <h2 class='d-flex justify-content-center'><FONT color='green'>Demande de réservation d'une salle</FONT></h2>
      </div>    
    </div> 
    <br>  
    <div class='row'>
        <div class='col-12 d-flex justify-content-center'>
          <p>Bonjour je voudrais des informations pour éventuellement réserver la salle : $salle.<br>Pouvez vous me contacter par mail $mail ou par téléphone au $tel afin que nous puissions en discuter.<br>Merci, cordialement...<br>$nom $prenom</p>
      </div>    
    </div>   
</div> 
<script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
</body>
</html>";


$rob = $this->input->post('robot');
if (isset($rob)) {

  
    $this->email->from('noreply@saintjustenchaussee.fr', $nom." ".$prenom);
    $this->email->to('com@mairie-saintjustenchaussee.fr');  
    $this->email->subject('Demande pour réservation de salle');
    $this->email->message($message);
    $this->email->send();  
    $_SESSION["resok"] ="ok";   }      
            
            

            // Redirection sur la page réservation
            redirect("MairieSJ/reservationsalle");
           }
    } 
    else{
        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/association/reservationsalle');
    }

}


//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//Lien Agenda

//Accueil
    public function accueilAgenda(){

        $head['title']="Agenda";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/accueilAgenda');

    }

//Liste Evenement
    public function evenement(){

        $head['title'] = "Liste Evenement";

        $this->load->model('MairieSJ_model');
    
        $data = $this->MairieSJ_model->evenement();
        $aView["evenement"] = $data;
    
        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/evenement/listeeve',$aView);

    }

//Permanence des élus

//Permanance diverses

//------------------------------------------------------------------------------------------------------------------------------------------------------------------

//Lien Cantine

//Accueil
    public function cantine(){

        $head['title'] = "Cantine";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/cantine/cantine');

    }

//planning de réservation
    public function planning(){

        $head['title'] = "Planning";

        $this->load->model('MairieSJ_model');
        
        $data = $this->MairieSJ_model->planning();
        $aView["planning"] = $data;

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/cantine/planning', $aView);

    }

//Réservation liste des mois pour téléchargement du fichier pdf du mois séléctionné

    public function reservation(){

        $head['title'] = "Fiche Réservation Mois";

        $this->load->model('MairieSJ_model');
    
        $data = $this->MairieSJ_model->reservation();
        $aView["reservation"] = $data;

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/cantine/reservation', $aView);

        }

//Liste Menu par semaine avec téléchargement du fichier pdf de la semaine séléctionné
    public function menu(){

        $head['title'] = "Menu";

        $this->load->model('MairieSJ_model');
    
        $data = $this->MairieSJ_model->menu();
        $aView["menu"] = $data;

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/cantine/menu', $aView);

    }

//--------------------------------------------------------------------------------------------------------------------------------------------------------------------

//Lien Police Municipal

    public function police(){

        $head['title'] = "Police municipal";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/police');

    }

//Environnement
    public function environnement(){

        $head['title'] = "Environnement";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/environnement');

    }


//Document administratif
//Accueil
    public function docAdmin(){

        $head['title'] = "Documents Administratifs";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/Document/accueil');

    }

//Carte identité et passeport
    public function CIetP(){

        $head['title'] = "Carte d'identité et Passeport";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/Document/CIetP');


    }

//Certificat d'immatriculation
    public function CIV(){

        $this->load->view('MairieSJ/Document/CIV');
        
    }


//Livret de famille
    public function LF(){

        $this->load->view('MairieSJ/Document/LF');
    
    }

//Recensement militaire
    public function RM(){

        $this->load->view('MairieSJ/Document/RM');

    }


//Cinéma Jeanne Moreau

    public function cinema(){

        $head['title'] = "Cinéma Jeanne Moreau";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/association/cinema');

    }


//CCAS

    public function ccas(){

        $head['title'] = "CCAS";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/ccas');

     }


//jeunesse

//accueil
    public function jeunesse(){

        $head['title'] = "Jeunesse";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/jeunesse/accueil');

    }

//Périscolaire et loisir

    public function periscolaireloisir(){

        $head['title'] = "Périscolaire et loisirs";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/jeunesse/periscolaireloisir');

    }


//Périscolaire

    public function periscolaire(){

        $this->load->view('MairieSJ/jeunesse/periscolaire');


    }


//Loisirs

    public function loisirs(){

        $this->load->view('MairieSJ/jeunesse/loisirs');

    }

//Contact Périscolaire et centre de loisirs

    public function contactPetCL(){

        $this->load->view('MairieSJ/jeunesse/contact');

    }


//Ecole de musique

    public function musique(){

        $head['title'] = "Ecole de musique";

        $this->load->view('header2', $head);
        $this->load->view('MairieSJ/jeunesse/musique');

    }

//Collège

    public function college(){

        $this->load->view('MairieSJ/jeunesse/college');

    }

//Ecole maternelle et élementaire

    public function ecole(){

        $this->load->view('MairieSJ/jeunesse/ecole');

    }




















}
?>