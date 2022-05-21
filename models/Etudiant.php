<?php
namespace App\Model;
use App\Core\Model;
class Etudiant extends User{
    private string $matricule;
    private string $sexe;
    private string $adresse;
    public function __construct(){
       self::$role = "ROLE_ETUDIANT";  
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

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

    public function insert():int{
        
        $db=parent::database();
        
         $db->connexionDB();
         //Requete non préparer est une requete dont la variable est injecter lors de l'écriture de la requete
        $sql="INSERT INTO personne (`nom_complet`,`login`,`password`,`role`,`matricule`,`adresse`,`sexe`) VALUES (?,?,?,?,?,?,?)";
     
         $result=$db->executeUpdate($sql,[$this->nomComplet,$this->login,$this->password,parent::$role,$this->matricule,$this->sexe]);
         $db->closeConnexion(); 
         return $result;
       
     }


    public static function findAll():array{
        $sql="select * from ".parent::table()." where role like '".self::$role."'";
        echo $sql;
        return[];
    }
}