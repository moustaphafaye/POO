<?php
namespace App\Model;

use App\Model\User;

class AC extends User{
    private string $sexe;
    private string $adresse;
    //les atributs navigationnels =>atributs issus des associations
    //oneToMany => inscription
    //1ere approche
    private array $inscription;

    //les fonctions navigationnels =>fonctions issus des associations
    //2ere approche

    public function inscriptions():array{
        return [];
    }

    public function __construct(){
       parent::$role = "ROLE_AC";
       $this-> inscription=[];
    
    }
    public static function findAll():array{
        $db=parent::database();
        $db->connexionDB();
        $sql="select nom_complet,adresse,sexe from ".parent::table()." where role like 'ROLE_AC'";
        $results=$db->executeSelect($sql);
        $db->closeConnexion(); 
        return $results;
    }
    //select * from personne where nom_complet like "Diop";
    //select * from personne where login=limzo and password=limzo;
    public function insert():int{
        
        $db=parent::database();
        
         $db->connexionDB();
         //Requete non préparer est une requete dont la variable est injecter lors de l'écriture de la requete
        $sql="INSERT INTO `personne` (`nom_complet`,`role`,`login`,`password`) VALUES (?,?,?,?)";
         $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password]);
        
         $db->closeConnexion(); 
         return $result;
       
     }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }
} 