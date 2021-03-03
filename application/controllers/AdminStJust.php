<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminStJust extends CI_Controller {

//Espace Connexion
    public function index(){

        $head['title']="Connexion";

        if ($this->input->post()){ // 2ème appel de la page: traitement du formulaire
         
            
            
            $data = $this->input->post();

            // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
            $this->form_validation->set_rules('Log', 'Login', 'required', array("required" => "Veuillez entrer votre login"));
             //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            
            if ($this->form_validation->run() == FALSE){
               
                $this->load->view('header', $head);
                $this->load->view('MairieSJadmin/index');
            }
            else{
            
            $this->load->model('MairieSJ_model');
            
            //Récupération du login
            $j = $this->input->post('Log');

            //Vérification existance en base
            $util= $this->MairieSJ_model->connexion($j);
            
            if (!(empty($util))){
                $mtphash = $util->us_mp;

                //Si mot de passe et login sont ok, direction vers pas accueil
               if (password_verify( $this->input->post('motdepasse'), $mtphash)){
                     
                    $_SESSION['status'] = $util->us_status;
                    $_SESSION['log'] = $util->us_log;
                    redirect("AdminStJust/accueil");

                    }
                else{$_SESSION["messlog3"]= "Mot de passe incorrect";
                    
                    $this->load->view('header2', $head);
                    $this->load->view('MairieSJadmin/index');
                }
            }
            else{
                $_SESSION["messlog2"]= "Vous êtes pas connu comme Agent de la mairie de Saint Just en Chaussé";
               
                $this->load->view('header2', $head);
                $this->load->view('MairieSJadmin/index');

                }
            }

        }
      //formulaire vierge
        else{
            $this->load->view('header2', $head);
            $this->load->view('MairieSJadmin/index');
        }
}




//Page d'accueil
    public function accueil(){

        $head['title']= "Accueil administration";

        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/accueil');
    }





//Enregistrement Agent de mairie
    public function enregistrementAgent(){

        $head['title']= "Enregistrement Agent Mairie";

        if ($this->input->post()){ // 2ème appel de la page: traitement du formulaire
      
        
            $data = $this->input->post();

            $_SESSION["stat"]= $this->input->post('us_status');



         // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
            $this->form_validation->set_rules('us_nom', 'Nom', 'required|max_length[15]', array("required" => "La %s est obligatoire.", "max_length" => "Le %s n'est pas valide, il doit faire 15 caractères maximum"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');  
      
            $this->form_validation->set_rules('us_prenom', 'Prenom', 'required|max_length[15]', array("required" => "Le %s est obligatoire.", "max_length" => "Le %s n'est pas valide, il doit faire 15 caractères maximum"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
       
     
            $this->form_validation->set_rules('us_mail', 'Mail', 'required|valid_email', array("required" => "Le %s est obligatoire.",   "valid_email"  => "Le format du %s n'est pas valide"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            $this->form_validation->set_rules('us_log', 'Login', 'required|min_length[6]|max_length[15]', array("required" => "Le %s est obligatoire.",   "min_length"  => "Le %s n'est pas valide, il doit faire 6 caractères au moins", "max_length" => "Le %s n'est pas valide, il doit faire 15 caractères maximum"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            $this->form_validation->set_rules('us_mp', 'Mot de passe', 'required|min_length[8]|max_length[15]', array("required" => "Le %s est obligatoire.",   "min_length"  => "Le %s n'est pas valide, il doit faire 8 caractères au moins", "max_length" => "Le %s n'est pas valide, il doit faire 15 caractères maximum"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

         

         

         //Test existance du mail
            $this->load->model('MairieSJ_model');
            $i = $this->input->post('us_mail');
            $bool = $this->MairieSJ_model->testmail($i);
      


        //Test existance du Login
            $this->load->model('MairieSJ_model');
            $i = $this->input->post('us_log');
            $bool1 = $this->MairieSJ_model->testlog($i);
            
        
         
         
            if ($this->input->post('us_mp') == $this->input->post('us_mp2'))    {$bool2 = false;} else {$bool2 = true;}
            

     
            if ($this->form_validation->run() == FALSE || $bool || $bool1 || $bool2){ // Echec de la validation, on réaffiche la vue formulaire 
             
             
                if ($bool){
                    $_SESSION["messMail"]= 'Ce mail existe déjà';
                }
                if ($bool1){
                    $_SESSION["messLogin"]= 'Ce Login existe déjà';
                }
                if($bool2){
                   $_SESSION["messmdp"]="Les mots de passes sont différents";
                }
                
                $this->load->view('header', $head);
                $this->load->view('MairieSJadmin/enregistrementAgent');
             
        }
        else{ 
          
            $password_hash = password_hash($this->input->post('us_mp'), PASSWORD_DEFAULT);
             
            $data['us_mp']=$password_hash;
             
            unset($data["us_mp2"]);

            $this->MairieSJ_model->insEnr($data,'administration');
             
            //$this->db->insert('administration', $data);
             
            $_SESSION["insok"] = ok;
            
            redirect("AdminStJust/enregistrementAgent");
        }
   
    }
    else{
        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/enregistrementAgent');
    }
   
}

//Changement Mot de passe

    public function changementMdp(){

        $head['title']= "Modification mot de passe";

        $this->load->model('MairieSJ_model');

        if ($this->input->post()){ // 2ème appel de la page: traitement du formulaire
      
            $data = $this->input->post();

            $this->form_validation->set_rules('us_mp3', 'Mot de passe', 'required|max_length[15]', array("required" => "Le %s est obligatoire.", "max_length" => "Le %s n'est pas valide, il doit faire 15 caractères maximum"));
            //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            
            $this->form_validation->set_rules('us_mp', 'Mot de passe', 'required|min_length[8]|max_length[15]', array("required" => "Le nouveau  %s est obligatoire.",   "min_length"  => "Le nouveau %s n'est pas valide, il doit faire 8 caractères au moins", "max_length" => "Le %s n'est pas valide, il doit faire 15 caractères maximum"));
            //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');


             
            if ($this->form_validation->run() == FALSE){

                $this->load->view('header', $head);
                $this->load->view('MairieSJadmin/changementMdp.php');

            }
            else{
            
            //Test ancien mtp avec variable de session log
                $this->load->model('MairieSJ_model');
                $res = $this->MairieSJ_model->connexion($_SESSION['log']);
                $mphash = $res->us_mp;

                $i = $this->input->post('us_mp3');

                if (!(password_verify($i, $mphash))){

                    $_SESSION["messmdp"] = "Ancien mot de passe incorrect";
                    
                    $this->load->view('header', $head);
                    $this->load->view('MairieSJadmin/changementMdp');
                }
                else{
                    if (!($this->input->post('us_mp') == $this->input->post('us_mp2'))){
                        
                        $_SESSION["messmdp"] = "Les mots de passes saisies sont différents";
                        
                        $this->load->view('header', $head);
                        $this->load->view('MairieSJadmin/changementMdp');
                    }
                    else{

                        unset($data["us_mp3"]);
                        unset($data["us_mp2"]);

                        $password_hash = password_hash($this->input->post('us_mp'), PASSWORD_DEFAULT);
             
                        $data['us_mp']=$password_hash;


                        $this->MairieSJ_model->ModifEnr($data,'administration','us_log',$_SESSION['log']);
                        //$this->db->where('us_log',$_SESSION['log']);
                        //$this->db->update('administration', $data);

                        $_SESSION["mdpmodif"]="ok";
                        
                        redirect("AdminStJust/changementMdp");
                    }
                }
            }
        }
        else{
        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/changementMdp');
        }

    }



//Liste contact Pour CRUD

//Partie service mairie   

    public function listecontactsmairie(){

        $head['title']= "Contact service Mairie";

        $this->load->model('MairieSJ_model');
        $data = $this->MairieSJ_model->servicecontact();
        $aView["serviceMairie"] = $data;
        
        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/listeservicemairie',$aView);
    }

//service mairie modification
public function modifserv($id){

    $head['title']= "Modification contact service Mairie";

    // Requête de sélection de l'enregistrement souhaité
    $this->load->model('MairieSJ_model');
    $serv = $this->MairieSJ_model->serv($id);
    $aView["service"] = $serv;

    if ($this->input->post()) 
    { // 2ème appel de la page: traitement du formulaire

        $data = $this->input->post();

    // Définition du filtre, ici la valeur est obligatoire pour le champ 'serv_nom'
        $this->form_validation->set_rules('serv_nom', 'Nom Service', 'required|max_length[50]', array("required" => "Le champ %s est obligatoire.", "max_length" => "Le %s n'est pas valide, il doit faire 50 caractères maximum"));
     //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        // Définition du filtre, ici la valeur est obligatoire pour le champ 'serv_tel'
        $this->form_validation->set_rules('serv_tel', 'Téléphone service', 'max_length[30]', array("max_length" => "Le %s n'est pas valide, il doit faire 30 caractères maximum"));
     //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        // Définition du filtre, ici la valeur est obligatoire pour le champ 'serv_mail'
        $this->form_validation->set_rules('serv_mail', 'Mail Service', 'valid_email', array( "valid_email" => "Le format du %s n'est pas valide"));
     //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    
    

        if ($this->form_validation->run() == FALSE)
            { // Echec de la validation, on réaffiche la vue formulaire
                $this->load->view('header', $head);
                $this->load->view('MairieSJadmin/contact/modifserv', $aView);

            }
        else
            { // La validation a réussi, nos valeurs sont bonnes, on peut modifier en base  
     
               /* Utilisation de la méthode where() toujours 
               * avant select(), insert() ou update()
               * dans cette configuration sur plusieurs lignes 
               */
            $this->MairieSJ_model->ModifEnr($data,'serviceMairie','serv_id',$id);   
            //$this->db->where('serv_id',$id);
            //$this->db->update('serviceMairie', $data);

            // Redirection sur la page contact association
            redirect("AdminStJust/listecontactsmairie");
           }
    } 
    else{ // 1er appel de la page: affichage du formulaire 
            
            $this->load->view('header', $head);
            $this->load->view('MairieSJadmin/contact/modifserv', $aView);
          
        }
} 

    

//association ajout
    public function ajoutserv(){

        $head['title']= "Ajout contact service Mairie";

        $this->load->model('MairieSJ_model');
    
        if ($this->input->post()) 
            { // 2ème appel de la page: traitement du formulaire
    
            $data = $this->input->post();

        // Définition du filtre, ici la valeur est obligatoire pour le champ 'serv_nom'
            $this->form_validation->set_rules('serv_nom', 'Nom Service', 'required|max_length[50]', array("required" => "Le champ %s est obligatoire.", "max_length" => "Le %s n'est pas valide, il doit faire 50 caractères maximum"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        // Définition du filtre, ici la valeur est obligatoire pour le champ 'serv_tel'
            $this->form_validation->set_rules('serv_tel', 'Téléphone service', 'max_length[30]', array("max_length" => "Le %s n'est pas valide, il doit faire 30 caractères maximum"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        // Définition du filtre, ici la valeur est obligatoire pour le champ 'serv_mail'
            $this->form_validation->set_rules('serv_mail', 'Mail Service', 'valid_email', array( "valid_email" => "Le format du %s n'est pas valide"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        
        

            if ($this->form_validation->run() == FALSE)
                { // Echec de la validation, on réaffiche la vue formulaire
                    $this->load->view('header', $head);
                    $this->load->view('MairieSJadmin/contact/ajoutserv');

                }
            else
                { // La validation a réussi, nos valeurs sont bonnes, on peut modifier en base  
         
                   /* Utilisation de la méthode where() toujours 
                   * avant select(), insert() ou update()
                   * dans cette configuration sur plusieurs lignes 
                   */
                    
                $this->MairieSJ_model->insEnr($data,'serviceMairie');
                //$this->db->insert('serviceMairie', $data);

                // Redirection sur la page contact association
                redirect("AdminStJust/listecontactsmairie");
               }
        } 
    else{ // 1er appel de la page: affichage du formulaire 
             
            $this->load->view('header', $head);
            $this->load->view('MairieSJadmin/contact/ajoutserv');
              
        }
    
}


//association suppression
public function suppserv($id){

    $head['title']= "Suppression contact service Mairie";
    
    // Requête de sélection de l'enregistrement souhaité
    $this->load->model('MairieSJ_model');
    $aListe = $this->MairieSJ_model->serv($id);
    $aView["service"] = $aListe;

    if ($this->input->post()) 
    { // 2ème appel de la page: traitement du formulaire
         
        $this->MairieSJ_model->SupEnr('serviceMairie','serv_id',$id);
        //$this->db->where('serv_id',$id);
        //$this->db->delete('serviceMairie');
        
        // Redirection sur la page contact association
        redirect("AdminStJust/listecontactsmairie");
    } 
    else 
    { // 1er appel de la page: affichage du formulaire de suppression 
        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/contact/suppserv',$aView);
    }

}



   
//Partie association   
//Page d'accueil  
    public function listecontactassociation(){

        $head['title']= "Contact association";

        $this->load->model('MairieSJ_model');
        $data = $this->MairieSJ_model->association();
        $aView["association"] = $data;
        
        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/listeassoc',$aView);
    }
    

//association modification
    public function modifassoc($id){

        $head['title']= "Modification contact association";

        // Requête de sélection de l'enregistrement souhaité
        $this->load->model('MairieSJ_model');
        $ass = $this->MairieSJ_model->ass($id);
        $aView["association"] = $ass;

        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
    
            $data = $this->input->post();

        // Définition du filtre, ici la valeur est obligatoire pour le champ 'ass_nom'
            $this->form_validation->set_rules('ass_nom', 'Nom association', 'required|max_length[50]', array("required" => "Le champ %s est obligatoire.", "max_length" => "Le %s n'est pas valide, il doit faire 50 caractères maximum"));
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        // Définition du filtre, ici la valeur est obligatoire pour le champ 'ass_tel'
        $this->form_validation->set_rules('ass_tel', 'Téléphone association', 'max_length[30]', array("required" => "Le champ %s est obligatoire.", "max_length" => "Le %s n'est pas valide, il doit faire 30 caractères maximum"));
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        
        // Définition du filtre, ici la syntaxe du mail 
            $this->form_validation->set_rules('ass_mail', 'Mail Association', 'valid_email', array("valid_email"  => "Le format du %s n'est pas valide"));
         //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>'); 

            if ($this->form_validation->run() == FALSE)
                { // Echec de la validation, on réaffiche la vue formulaire
                    $this->load->view('header', $head);
                    $this->load->view('MairieSJadmin/contact/modifassoc', $aView);

                }
            else
                { // La validation a réussi, nos valeurs sont bonnes, on peut modifier en base  
         
                   /* Utilisation de la méthode where() toujours 
                   * avant select(), insert() ou update()
                   * dans cette configuration sur plusieurs lignes 
                   */
                
                $this->MairieSJ_model->ModifEnr($data,'association','ass_id',$id);    
                //$this->db->where('ass_id',$id);
                //$this->db->update('association', $data);

                // Redirection sur la page contact association
                redirect("AdminStJust/listecontactassociation");
               }
        } 
        else{ // 1er appel de la page: affichage du formulaire 
                $this->load->view('header', $head);
                $this->load->view('MairieSJadmin/contact/modifassoc', $aView);
              
            }
    } 

        
    
//association ajout
    public function ajoutassoc(){

        $head['title']= "Ajout contact association";

        $this->load->model('MairieSJ_model');
        
        if ($this->input->post()) 
            { // 2ème appel de la page: traitement du formulaire
        
                $data = $this->input->post();
    
            // Définition du filtre, ici la valeur est obligatoire pour le champ 'ass_nom'
                $this->form_validation->set_rules('ass_nom', 'Nom association', 'required', array("required" => "Le champ %s est obligatoire."));
             //Mise en page personaliser du message d'erreur
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');


               // Définition du filtre, ici la valeur est obligatoire pour le champ 'ass_tel'
                $this->form_validation->set_rules('ass_tel', 'Téléphone association', 'max_length[30]', array("required" => "Le champ %s est obligatoire.", "max_length" => "Le %s n'est pas valide, il doit faire 30 caractères maximum"));
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            
            // Définition du filtre, ici la syntaxe du mail 
                $this->form_validation->set_rules('ass_mail', 'Mail Association', 'valid_email', array("valid_email"  => "Le format du %s n'est pas valide"));
             //Mise en page personaliser du message d'erreur
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>'); 
    
                if ($this->form_validation->run() == FALSE)
                    { // Echec de la validation, on réaffiche la vue formulaire
                        $this->load->view('header', $head);
                        $this->load->view('MairieSJadmin/contact/ajoutassoc');
    
                    }
                else
                    { // La validation a réussi, nos valeurs sont bonnes, on peut modifier en base  
             
                       /* Utilisation de la méthode where() toujours 
                       * avant select(), insert() ou update()
                       * dans cette configuration sur plusieurs lignes 
                       */
                        
                    $this->MairieSJ_model->insEnr($data,'association');
                    //$this->db->insert('association', $data);
                    
    
                    // Redirection sur la page contact association
                    redirect("AdminStJust/listecontactassociation");
                   }
            } 
        else{ // 1er appel de la page: affichage du formulaire 
                $this->load->view('header', $head);    
                $this->load->view('MairieSJadmin/contact/ajoutassoc');
                  
            }
        
    }
    

    //association suppression
    public function suppassoc($id){

        $head['title']= "Suppression contact association";
        
        // Requête de sélection de l'enregistrement souhaité
        $this->load->model('MairieSJ_model');
        $ass = $this->MairieSJ_model->ass($id);
        $aView["association"] = $ass;
    
        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
            $this->MairieSJ_model->SupEnr('association','ass_id',$id);
            //$this->db->where('ass_id',$id);
            //$this->db->delete('association');
            
            // Redirection sur la page contact association
            redirect("AdminStJust/listecontactassociation");
        } 
        else 
        { // 1er appel de la page: affichage du formulaire de suppression 
            $this->load->view('header', $head);
            $this->load->view('MairieSJadmin/contact/suppassoc',$aView);
        }

    }



//Agenda

//Evenement

//Liste
    public function evenement(){

        $head['title'] = "Accueil Evenement";

        $this->load->model('MairieSJ_model');
        
        $data = $this->MairieSJ_model->evenement();
        $aView["evenement"] = $data;
        
        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/evenement/listeeve',$aView);

    }

//Suppression evenement

    public function suppeve($id){

        $head['title']= "Suppression manifestation";
    
    // Requête de sélection de l'enregistrement souhaité
        $this->load->model('MairieSJ_model');
        $eve = $this->MairieSJ_model->eve($id);
        $aView["evenement"] = $eve;

        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
            $this->MairieSJ_model->SupEnr('Evenements','eve_id',$id);
            //$this->db->where('eve_id',$id);
            //$this->db->delete('Evenements');
        
        // Redirection sur la page contact association
            redirect("AdminStJust/evenement");
        } 
        else 
        { // 1er appel de la page: affichage du formulaire de suppression 
            $this->load->view('header', $head);
            $this->load->view('MairieSJadmin/evenement/suppeve',$aView);
        }

    }


//association modification
public function modifeve($id){

    $head['title']= "Modification Manifestation";

    // Requête de sélection de l'enregistrement souhaité
    $this->load->model('MairieSJ_model');
    $ass = $this->MairieSJ_model->eve($id);
    $aView["evenement"] = $ass;

    if ($this->input->post()) 
    { // 2ème appel de la page: traitement du formulaire

        $data = $this->input->post();

    // Définition du filtre, ici la valeur est obligatoire pour le champ 'eve_date'
        $this->form_validation->set_rules('eve_date', 'Date manifestation', 'required|max_length[30]', array("required" => "Le champ %s est obligatoire.", "max_length" => "La %s n'est pas valide, elle doit faire 30 caractères maximum"));
     //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    
    // Définition du filtre, ici la valeur est obligatoire pour le champ 'eve_manif'
        $this->form_validation->set_rules('eve_manif', 'Manifestation', 'required|max_length[50]', array("required" => "Le champ %s est obligatoire.", "max_length" => "La %s n'est pas valide, elle doit faire 50 caractères maximum"));;
    //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    // Définition du filtre, ici la valeur est obligatoire pour le champ 'eve_Orga'
        $this->form_validation->set_rules('eve_Orga', 'Nom organisteur', 'required|max_length[40]', array("required" => "Le champ %s est obligatoire.", "max_length" => "Le %s n'est pas valide, il doit faire 40 caractères maximum"));;
    //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    // Définition du filtre, ici la valeur est obligatoire pour le champ 'eve_tel'
    $this->form_validation->set_rules('eve_tel', 'Téléphone organisteur', 'max_length[30]"', array( "max_length" => "Le %s n'est pas valide, il doit faire 30 caractères maximum"));;
    //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    // Définition du filtre, ici la syntaxe du mail 
        $this->form_validation->set_rules('eve_contact', 'Mail contact', 'valid_email', array("valid_email"  => "Le format du %s n'est pas valide"));
     //Mise en page personaliser du message d'erreur
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>'); 

        if ($this->form_validation->run() == FALSE)
            { // Echec de la validation, on réaffiche la vue formulaire
                $this->load->view('header', $head);
                $this->load->view('MairieSJadmin/evenement/modifeve', $aView);

            }
        else
            { 
            $this->MairieSJ_model->ModifEnr($data,'Evenements','eve_id',$id);  
            //$this->db->where('eve_id',$id);
            //$this->db->update('Evenements', $data);

            // Redirection sur la page contact association
            redirect("AdminStJust/evenement");
           }
    } 
    else{ // 1er appel de la page: affichage du formulaire 
        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/evenement/modifeve', $aView);
          
        }
    
    
    
    }


//manifestation ajout
    public function ajouteve(){

    $head['title']= "Ajout Manifestation";

    $this->load->model('MairieSJ_model');
    
    if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
    
            $data = $this->input->post();

         // Définition du filtre, ici la valeur est obligatoire pour le champ 'eve_date'
            $this->form_validation->set_rules('eve_date', 'Date manifestation', 'required|max_length[30]', array("required" => "Le champ %s est obligatoire.", "max_length" => "La %s n'est pas valide, elle doit faire 30 caractères maximum"));
        //Mise en page personaliser du message d'erreur
           $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
       
       // Définition du filtre, ici la valeur est obligatoire pour le champ 'eve_manif'
           $this->form_validation->set_rules('eve_manif', 'Manifestation', 'required|max_length[50]', array("required" => "Le champ %s est obligatoire.", "max_length" => "La %s n'est pas valide, elle doit faire 50 caractères maximum"));;
       //Mise en page personaliser du message d'erreur
           $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
   
       // Définition du filtre, ici la valeur est obligatoire pour le champ 'eve_Orga'
           $this->form_validation->set_rules('eve_Orga', 'Nom organisteur', 'required|max_length[40]', array("required" => "Le champ %s est obligatoire.", "max_length" => "Le %s n'est pas valide, il doit faire 40 caractères maximum"));;
       //Mise en page personaliser du message d'erreur
           $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
   
       // Définition du filtre, ici la valeur est obligatoire pour le champ 'eve_tel'
           $this->form_validation->set_rules('eve_tel', 'Téléphone organisteur', 'max_length[30]"', array( "max_length" => "Le %s n'est pas valide, il doit faire 30 caractères maximum"));;
       //Mise en page personaliser du message d'erreur
           $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
   
       // Définition du filtre, ici la syntaxe du mail 
           $this->form_validation->set_rules('eve_contact', 'Mail contact', 'valid_email', array("valid_email"  => "Le format du %s n'est pas valide"));
        //Mise en page personaliser du message d'erreur

            if ($this->form_validation->run() == FALSE)
               
                { // Echec de la validation, on réaffiche la vue formulaire
                    $this->load->view('header', $head);
                    $this->load->view('MairieSJadmin/evenement/eveajout');

                }
            else
                {
                $this->MairieSJ_model->insEnr($data,'Evenements');
                //$this->db->insert('Evenements', $data);

                // Redirection sur la page liste evenement
                redirect("AdminStJust/evenement");
               }
        } 
    else{ // 1er appel de la page: affichage du formulaire 
            $this->load->view('header', $head);
            $this->load->view('MairieSJadmin/evenement/eveajout');
              
        }
    
    }


//Cantine

    public function planning(){

        $head['title'] = "Planning";

        $this->load->model('MairieSJ_model');
    
        $data = $this->MairieSJ_model->planning();
        $aView["planning"] = $data;

        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/cantine/planning', $aView);


    }

//Modification planning de réservation

    public function modifPlanning($id){

        $head['title'] = "Modification Planning";


      // Requête de sélection de l'enregistrement souhaité
        $this->load->model('MairieSJ_model');
        $enr = $this->MairieSJ_model->plaEnr($id);
        $aView["planning"] = $enr;
  
      if ($this->input->post()) 
      { // 2ème appel de la page: traitement du formulaire
  
          $data = $this->input->post();
  
      // Définition du filtre, ici la valeur est obligatoire pour le champ 'pla_annee'
          $this->form_validation->set_rules('pla_annee', 'Année', 'required|max_length[4]', array("required" => "Le champ %s est obligatoire.", "max_length" => "4 caractères pour l'Année"));
       //Mise en page personaliser du message d'erreur
          $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
      
      // Définition du filtre, ici la valeur est obligatoire pour le champ 'pla_date'
          $this->form_validation->set_rules('pla_date', 'Date', 'required|max_length[10]', array("required" => "Le champ %s est obligatoire.", "max_length" => "10 caractères la %s JJ/MM/AAAA"));
      //Mise en page personaliser du message d'erreur
          $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
  
  
          if ($this->form_validation->run() == FALSE)
              { // Echec de la validation, on réaffiche la vue formulaire
                  $this->load->view('header', $head);
                  $this->load->view('MairieSJadmin/cantine/modifPla', $aView);
  
              }
          else
              { 
                  $this->MairieSJ_model->ModifEnr($data,'PlanningRestauration','pla_id',$id);
                  //$this->db->where('pla_id',$id);
                  //$this->db->update('PlanningRestauration', $data);
  
              // Redirection sur la page planning
              redirect("AdminStJust/planning");
             }
      } 
      else{ // 1er appel de la page: affichage du formulaire 
          $this->load->view('header', $head);
          $this->load->view('MairieSJadmin/cantine/modifPla', $aView);
            
          }
      
    }



//Menu

//Affichage Menu

public function menu(){

    $head['title'] = "Menu";

    $this->load->model('MairieSJ_model');
    
    $data = $this->MairieSJ_model->menu();
    $aView["menu"] = $data;

    $this->load->view('header', $head);
    $this->load->view('MairieSJadmin/cantine/menu', $aView);


}

//suppression d'une semaine de menu

public function suppMenu($id){

    $head['title']= "Suppression d'une semaine de menu";
    
    // Requête de sélection de l'enregistrement souhaité
    $this->load->model('MairieSJ_model');
    $aListe = $this->MairieSJ_model->menuEnr($id);
    $aView["menu"] = $aListe;

    if ($this->input->post()) 
    { // 2ème appel de la page: traitement du formulaire
        $this->MairieSJ_model->SupEnr('Menu','menu_id',$id);
        //$this->db->where('menu_id',$id);
        //$this->db->delete('Menu');
        
        // Redirection sur la page contact association
        redirect("AdminStJust/menu");
    } 
    else 
    { // 1er appel de la page: affichage du formulaire de suppression 
        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/cantine/suppMenu',$aView);
    }

}


//Ajout d'une semaine de menu, ne pas oublier de joindre le fichier pdf dans le dossier Cantine/Menu

public function ajoutMenu(){

    $head['title']= "Ajout Menu 1 semaine";
    
    $this->load->model('MairieSJ_model');
    
    if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
    
            $data = $this->input->post();

        // Définition du filtre, ici la valeur est obligatoire pour le champ 'debut'
            $this->form_validation->set_rules('debut', 'Numéro jour début de semaine', 'required|max_length[3]', array("required" => "Le champ %s est obligatoire.", "max_length" => "3 caractères Maximum"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        
        // Définition du filtre, ici la valeur est obligatoire pour le champ 'fin'
            $this->form_validation->set_rules('fin', 'Numéro jour fin de semaine', 'required|max_length[3]', array("required" => "Le champ %s est obligatoire.", "max_length" => "3 caractères Maximum"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        // Définition du filtre, ici la valeur est obligatoire pour le champ 'moisd'
            $this->form_validation->set_rules('moisd', 'Mois début de semaine', 'required|max_length[10]', array("required" => "Le champ %s est obligatoire.", "max_length" => "10 caractères Maximum"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

         // Définition du filtre, ici la valeur est obligatoire pour le champ 'moisf'
             $this->form_validation->set_rules('moisf', 'Mois fin de semaine', 'required|max_length[10]', array("required" => "Le champ %s est obligatoire.", "max_length" => "10 caractères Maximum"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

         // Définition du filtre, ici la valeur est obligatoire pour le champ 'annee'
            $this->form_validation->set_rules('annee', 'Annee', 'required|max_length[4]', array("required" => "Le champ %s est obligatoire.", "max_length" => "4 caractères Maximum"));
         //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            if ($this->form_validation->run() == FALSE)
               
                { // Echec de la validation, on réaffiche la vue formulaire
                    $this->load->view('header', $head);
                    $this->load->view('MairieSJadmin/cantine/ajoutMenu');

                }
            else
                {
                
               // On créé un tableau de configuration pour l'upload
               $config['upload_path'] = './Cantine/Menu/'; // chemin où sera stocké le fichier

               // On indique les types autorisés (ici pour des images)
               $config['allowed_types'] = 'pdf'; 

               $config['max_size'] = 50000;
               $config['max_width'] = 50000;
               $config['max_height'] = 50000;

           
        // On charge la librairie 'upload'
               $this->load->library('upload');

        // On initialise la config 
               $this->upload->initialize($config);
           
       //Pourrécupérer (dans un tableau PHP) les informations d'origine sur le fichier téléchargé.
               $aUploadDatas = $this->upload->data(); 
         
       // La méthode do_upload() effectue les validations sur l'attribut HTML 'name' ('fichier' dans notre formulaire) et si OK renomme et déplace le fichier tel que configuré
               if ( ! $this->upload->do_upload('fichier')){
                   
                   $_SESSION['fich']='Aucun fichier joint ou le téléchargement du fichier à échoué, le format du fichier accépté est pdf ';
                   $this->load->view('header', $head);
                   $this->load->view('MairieSJadmin/cantine/ajoutMenu');
                   }
               else{
                        $this->MairieSJ_model->insEnr($data,'Menu');
                        //$this->db->insert('Menu', $data);

                       // Redirection sur la page liste evenement
                        redirect("AdminStJust/menu");
                    }
            }
       } 
   else{ // 1er appel de la page: affichage du formulaire 
    $this->load->view('header', $head);
    $this->load->view('MairieSJadmin/cantine/ajoutMenu');
             
       }
   
   
   }

//Fiche réservation cantine
    public function reservation(){

        $head['title'] = "Fiche Réservation Mois";

        $this->load->model('MairieSJ_model');

        $data = $this->MairieSJ_model->reservation();
        $aView["reservation"] = $data;

        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/cantine/reservation', $aView);

    }

//Suppression réservation mois cantine

    public function suppRes($id){

        $head['title']= "Suppression d'un mois de réservation";
    
    // Requête de sélection de l'enregistrement souhaité
        $this->load->model('MairieSJ_model');
        $aListe = $this->MairieSJ_model->reservationEnr($id);
        $aView["reservation"] = $aListe;

        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
            $this->MairieSJ_model->SupEnr('reservationcantine','res_id',$id);
            //$this->db->where('res_id',$id);
            //$this->db->delete('reservationcantine');
        
        // Redirection sur la page contact association
            redirect("AdminStJust/reservation");
        } 
        else 
        { // 1er appel de la page: affichage du formulaire de suppression 
            $this->load->view('header', $head);
            $this->load->view('MairieSJadmin/cantine/supRes',$aView);
        }

    }
    
//Ajout Réservation

public function ajoutRes(){

    $head['title']= "Ajout 1 mois de réservation";

    $this->load->model('MairieSJ_model');
    
    if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
    
            $data = $this->input->post();

        // Définition du filtre, ici la valeur est obligatoire pour le champ 'debut'
            $this->form_validation->set_rules('res_mois', 'Mois de réservation', 'required|max_length[10]', array("required" => "Le champ %s est obligatoire.", "max_length" => "10 caractères Maximum"));
        //Mise en page personaliser du message d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        
        

            if ($this->form_validation->run() == FALSE)
               
                { // Echec de la validation, on réaffiche la vue formulaire
                    $this->load->view('header', $head);
                    $this->load->view('MairieSJadmin/cantine/ajoutRes');

                }
            else
                {
                // On créé un tableau de configuration pour l'upload
                $config['upload_path'] = './Cantine/FicheReservationCantine/'; // chemin où sera stocké le fichier

                // On indique les types autorisés (ici pour des images)
                $config['allowed_types'] = 'pdf'; 

                $config['max_size'] = 50000;
                $config['max_width'] = 50000;
                $config['max_height'] = 50000;

            
         // On charge la librairie 'upload'
                $this->load->library('upload');

         // On initialise la config 
                $this->upload->initialize($config);
            
        //Pourrécupérer (dans un tableau PHP) les informations d'origine sur le fichier téléchargé.
                $aUploadDatas = $this->upload->data(); 
          
        // La méthode do_upload() effectue les validations sur l'attribut HTML 'name' ('fichier' dans notre formulaire) et si OK renomme et déplace le fichier tel que configuré
                if ( ! $this->upload->do_upload('fichier')){
                    
                    $_SESSION['fich']='Aucun fichier joint ou le téléchargement du fichier à échoué, le format du fichier accépté est pdf ';
                    $this->load->view('header', $head);
                    $this->load->view('MairieSJadmin/cantine/ajoutRes');
                    }
                else{
                    $this->load->model('MairieSJ_model');
                    $res = $this->input->post('res_mois');
                    $bool = $this->MairieSJ_model->TestreservationEnr($res);
                    
                    if (!($bool)){

                        $this->MairieSJ_model->insEnr($data,'reservationcantine');
                        //$this->db->insert('reservationcantine', $data);
                        
                        // Redirection sur la page liste evenement
                        redirect("AdminStJust/reservation");
                        }
                    else{
                        redirect("AdminStJust/reservation");
                        }

                    }
            }
        } 
    else{ // 1er appel de la page: affichage du formulaire 
        $this->load->view('header', $head);
        $this->load->view('MairieSJadmin/cantine/ajoutRes');
              
        }
    
    
    }




    

}







?>