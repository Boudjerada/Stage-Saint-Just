<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MairieSJ_model extends CI_Model
{

//Enregistrement Administrateur

//Test existance du login qui est unique en base, si déjà connu de la base, un message en avertirra l'utilisateur

public function testlog($log){

    $requete = $this->db->query("SELECT * FROM Administration  WHERE us_log= ?", $log);
    $nblog = $requete->row();

    return (!empty($nblog)); 

    }

//Test existence du mail qui est unique en base, si déjà connu de la base, un message en avertirra l'utilisateur
    public function testmail($mail){
        
  
        $requete = $this->db->query("SELECT * FROM Administration  WHERE us_mail= ?", $mail);
        $nbemail = $requete->row();

        return (!empty($nbemail)); 
    }




//------------------------------------------------------------------------------------------------------------------------------------------------------
//Connexion de l'agent : Récupération de ses informations en bases. Les tests d'autentification sont faites dans la méthode index du contrôleur Administré
    public function connexion($log){
        
        $requete = $this->db->query("SELECT * FROM Administration  WHERE us_log= ?", $log);
        $us = $requete->row();
        return $us;          
    }



//-------------------------------------------------------------------------------------------------------------------------------------------------------
//Requête de sélection d'informations divers commune aux 2 interfaces pour certaines

//Liste des contacts
//Service contact affichage complet
        public function servicecontact(){
        
        $requete = $this->db->query("SELECT * FROM serviceMairie");
        $result = $requete->result(); 
        return $result;            
    }

//Service mairie affichage d'un service
    //par id
    public function serv($id){
    
        $requete = $this->db->query("SELECT * FROM serviceMairie where serv_id= ?", $id);
        $serv = $requete->row();
        return $serv;            
    }

    //par nom
    public function serv1($serv_nom){
    
        $requete = $this->db->query("SELECT * FROM serviceMairie where serv_nom= ?", $serv_nom);
        $serv = $requete->row();
        return $serv;            
    }

//Association affichage complet
    public function association(){
       
        $requete = $this->db->query("SELECT * FROM association");
        $result = $requete->result(); 
        return $result;            
    }

//Association affichage d'une assoc
    //Par id
    public function ass($id){
        
        $requete = $this->db->query("SELECT * FROM association where ass_id= ?", $id);
        $ass = $requete->row();
        return $ass;            
    }

    //Par nom
    public function ass1($ass_nom){
        
        $requete = $this->db->query("SELECT * FROM association where ass_nom= ?", $ass_nom);
        $ass = $requete->row();
        return $ass;            
    }




//--------------------------------------------------------------------------
//Evenement
//Evenement affichage complet
    public function evenement(){
       
        $requete = $this->db->query("SELECT * FROM Evenements");
        $result = $requete->result(); 
        return $result;            
    }




//Evenement affichage d'un évenement
    public function eve($id){
        
        $requete = $this->db->query("SELECT * FROM Evenements where eve_id= ?", $id);
        $eve = $requete->row();
        return $eve;            
    }



//--------------------------------------------------------------
//Plannning
//Planning de réservation cantine
    public function planning(){
        
        $requete = $this->db->query("SELECT * FROM PlanningRestauration" );
        $pla = $requete->result();
        return $pla;            
    }

// Une ligne du planning pour affichage les infos lors de la modification
    public function plaEnr($id){
        
        $requete = $this->db->query("SELECT * FROM PlanningRestauration where pla_id= ?", $id);
        $enrPla = $requete->row();
        return $enrPla;            
    }
//-------------------------------------------------------------
//Cantine
//Liste Menu
    public function menu(){
        
        $requete = $this->db->query("SELECT * FROM Menu");
        $menu = $requete->result();
        return $menu;            
    }

//1 enregistrement pour affichage des infos lors de la confirmation de la suppression. Pas de modification car renvoie sur un pdf => suppression et ajout
    public function menuEnr($id){
        
        $requete = $this->db->query("SELECT * FROM Menu where menu_id=?",$id);
        $menu = $requete->row();
        return $menu;            
    }

//------------------------------------------------------------------------------------------
//Réservation
//Liste Réservation
    public function reservation(){
        
        $requete = $this->db->query("SELECT * FROM reservationcantine");
        $res = $requete->result();
        return $res;            
        }

//1 réservation à savoir 1 mois 
    public function reservationEnr($id){
        
        $requete = $this->db->query("SELECT * FROM reservationcantine where res_id=?",$id);
        $res = $requete->row();
        return $res;            
    }

//Test existence enregistrement Réservation car une ligne en base pour 2 fichiers pdf (habitant de saint Just et Extérieur). Ceci en cas d'enregistrement. 

    public function TestreservationEnr($res){
        $requete = $this->db->query("SELECT * FROM reservationcantine  WHERE res_mois= ?", $res);
        $nbres = $requete->row();

        return (!empty($nbres));
    }

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//CRUD
//Requete de Modification, suppression, ajout pour l'espace administratif. Gràce aux paramètres, ces 3 méthodes sont communes à toutes les bases de données


//Ajout Enregistrement
    public function insEnr($data, $nomBase){
        $this->db->insert($nomBase, $data);
    }


//Modification Enregistrement avec 1 attribut de séléction
    public function ModifEnr($data,$nomBase,$Nomcolonne,$Valeurcolonne){
        
        $this->db->where($Nomcolonne,$Valeurcolonne);
        $this->db->update($nomBase, $data);
    }

    
//Suppression d'un Enregistrement avec 1 attribut de séléction
    public function SupEnr($nomBase,$Nomcolonne,$Valeurcolonne){
        
        $this->db->where($Nomcolonne,$Valeurcolonne);
        $this->db->delete($nomBase);
    }









}

?>
    