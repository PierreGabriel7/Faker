<?php

namespace ISL\Entity;


class Personne{
    //Attributs
    public $prenom;
    public $adresse;
    public $pays;
    public $cp;
    public $societe;

    function __construct($prenom, $adresse, $pays, $societe, $cp){
        $this -> setPrenom($prenom);
        $this -> setAdresse($adresse);
        $this -> setPays($pays);
        $this -> setCp($societe);
        $this -> setSociete($cp);
    }
    
    // Setters
    function setPrenom($data){
        $this -> prenom = $data;
    }
    
    function setAdresse($data){
        $this -> adresse = $data;
    }
    
    function setPays($data){
        $this -> pays = $data;
    }

    function setCp($data){
        $this -> cp = $data;
    }

    function setSociete($data){
        $this -> societe = $data;
    }
    
    
    // Getters
    function getPrenom(){
        return $this -> prenom;
    }
    
    function getAdresse(){
        return $this -> adresse;
    }
    
    function getPays(){
        return $this -> pays;
    }
    
    function getCp(){
        return $this -> cp;
    }

    function getSociete(){
        return $this -> societe;
    }

    

    
}


 ?>