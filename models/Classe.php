<?php
namespace App\Model;
use App\Core\Model;
class Classe extends Model {

    //fonctions navigationels
    //ManyToOne avec professeur
    private int $id;
    
    public function professeurs():array|null{
        $sql="select ........";
        return parent::findBy($sql,[$this->id]);
        
    }
    public function etudiant():Etudiant{
        return new Etudiant();
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
}