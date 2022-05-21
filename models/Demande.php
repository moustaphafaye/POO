<?php
namespace App\Model;
use App\Core\Model;
use DateTime;

class Demande extends Model{
    private int $id;
    private string $motif;
    // private DateTime $date;
    private string $etat;

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }
    public function inscription():Inscription{
        return new Inscription();
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of motif
     */ 
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set the value of motif
     *
     * @return  self
     */ 
    public function setMotif($motif)
    {
        $this->motif = $motif;

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

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
    public function insert():int{
        
        $db=parent::database();
        
         $db->connexionDB();
         //Requete non préparer est une requete dont la variable est injecter lors de l'écriture de la requete
        $sql="INSERT INTO demande (`motif`,`date`,`etat`) VALUES (?,?,?)";
     
         $result=$db->executeUpdate($sql,[$this->motif,$this->date,$this->etat]);
         $db->closeConnexion(); 
         return $result;
       
     }
}
