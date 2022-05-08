<?php
class Professeur extends Personne {

    //fonctions navigationels
    //ManyToMany avec classe
    private string $grade;
    // private string $adresse;
    public function __construct(){
        $this->role = "ROLE_PROFESSEUR";  
     }

    public function classes():array{
        return [];
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
} 