<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class MairieSJ_model extends CI_Model{

                        //Borne
 
//Service contact affichage contact mairie
public function servicecontact(){
        
        $requete = $this->db->query("SELECT * FROM serviceMairie");
        $result = $requete->result(); 
        return $result;            
    }

//Planning de réservation cantine
public function planning(){
        
    $requete = $this->db->query("SELECT * FROM PlanningRestauration" );
    $pla = $requete->result();
    return $pla;            
}


                        //Espace employé

//Service mairie affichage d'un service
public function serv($id){
    
    $requete = $this->db->query("SELECT * FROM serviceMairie where serv_id= ?", $id);
    $serv = $requete->row();
    return $serv;            
}

//Enregistrement Administrateur
//Test existance du login qui est unique en base, si déjà connu de la base, un message en avertirra l'utilisateur

public function testlog($log){

    $requete = $this->db->query("SELECT * FROM Administration  WHERE us_log= ?", $log);
    $nblog = $requete->row();
    return (!empty($nblog)); 
    }


//Connexion de l'agent : Récupération de ses informations en bases. Les tests d'autentification sont faites dans la méthode index du contrôleur Administré
public function connexion($log){
        
    $requete = $this->db->query("SELECT * FROM Administration  WHERE us_log= ?", $log);
    $us = $requete->row();
    return $us;          
    }

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