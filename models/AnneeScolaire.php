<?php
namespace App\Model;
use App\Core\Model;
class AnneeScolaire extends Model {
   // fonctions navigationnels

    private int $id;
    private string $libelleanne;

   //OneToMany 
   public function inscriptions():array{
    return [];
    }
     

    /**
     * Get the value of libelleanne
     */ 
    public function getLibelleanne()
    {
        return $this->libelleanne;
    }

    /**
     * Set the value of libelleanne
     *
     * @return  self
     */ 
    public function setLibelleanne($libelleanne)
    {
        $this->libelleanne = $libelleanne;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function insert():int{
        
        $db=parent::database();
        
         $db->connexionDB();
         //Requete non préparer est une requete dont la variable est injecter lors de l'écriture de la requete
        $sql="INSERT INTO anneescolaire (`libelleanne`) VALUES (?)";
     
         $result=$db->executeUpdate($sql,[$this->libelleanne]);
         $db->closeConnexion(); 
         return $result;
       
     }
     public static function findAll2():array{
        $db=self::database();
        $db->connexionDB();
        $sql="select * from ".self::table()." WHERE etat=1";
        
        $result=$db->executeSelect($sql);
        // echo $sql;
        $db->closeConnexion();
        return $result;
     }
}