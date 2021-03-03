<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MairieSJ_model extends CI_Model
{

//Requete de sélection commune aux 2 interfaces


//Enregistrement Administrateur

//Test existance du login qui est unique en base

public function testlog($log){

    $requete = $this->db->query("SELECT * FROM Administration  WHERE us_log= ?", $log);
    $nblog = $requete->row();

    return (!empty($nblog)); 

    }

//Test existence du mail qui est unique en base
    public function testmail($mail){
        
  
        $requete = $this->db->query("SELECT * FROM Administration  WHERE us_mail= ?", $mail);
        $nbemail = $requete->row();

        return (!empty($nbemail)); 
    }


//Connexion de l'agent pour vérifier s'il existe et pour changement de mot de passe
    public function connexion($log){
        
        $requete = $this->db->query("SELECT * FROM Administration  WHERE us_log= ?", $log);
        $us = $requete->row();
        return $us;          
    }





//Liste des contacts

//Service contact affichage complet

    public function servicecontact(){
        
        $requete = $this->db->query("SELECT * FROM serviceMairie");
        $result = $requete->result(); 
        return $result;            
    }

//Service mairie affichage d'un service
public function serv($id){
    
    $requete = $this->db->query("SELECT * FROM serviceMairie where serv_id= ?", $id);
    $serv = $requete->row();
    return $serv;            
}

//association affichage complet
    public function association(){
       
        $requete = $this->db->query("SELECT * FROM association");
        $result = $requete->result(); 
        return $result;            
    }

//association affichage d'une association
    public function ass($id){
        
        $requete = $this->db->query("SELECT * FROM association where ass_id= ?", $id);
        $ass = $requete->row();
        return $ass;            
    }



//evenement affichage complet
    public function evenement(){
       
        $requete = $this->db->query("SELECT * FROM Evenements");
        $result = $requete->result(); 
        return $result;            
    }




//association affichage d'une association
    public function eve($id){
        
        $requete = $this->db->query("SELECT * FROM Evenements where eve_id= ?", $id);
        $eve = $requete->row();
        return $eve;            
    }




//Planning de réservation cantine

    public function planning(){
        
        $requete = $this->db->query("SELECT * FROM PlanningRestauration" );
        $pla = $requete->result();
        return $pla;            
    }

// Une ligne du planning

    public function plaEnr($id){
        
        $requete = $this->db->query("SELECT * FROM PlanningRestauration where pla_id= ?", $id);
        $enrPla = $requete->row();
        return $enrPla;            
    }

//Menu
//Liste Menu
    public function menu(){
        
        $requete = $this->db->query("SELECT * FROM Menu");
        $menu = $requete->result();
        return $menu;            
    }

//1 enregistrement

    public function menuEnr($id){
        
        $requete = $this->db->query("SELECT * FROM Menu where menu_id=?",$id);
        $menu = $requete->row();
        return $menu;            
    }

//Liste Réservation

    public function reservation(){
        
        $requete = $this->db->query("SELECT * FROM reservationcantine");
        $res = $requete->result();
        return $res;            
        }

//1 mois de réservation (1 ligne) 


    public function reservationEnr($id){
        
        $requete = $this->db->query("SELECT * FROM reservationcantine where res_id=?",$id);
        $res = $requete->row();
        return $res;            
    }
//Test existence enregistrement

    public function TestreservationEnr($res){


        $requete = $this->db->query("SELECT * FROM reservationcantine  WHERE res_mois= ?", $res);
        $nbres = $requete->row();

        return (!empty($nbres));
    }


//Requete de Modification, suppression, ajout pour l'espace administratif

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
    