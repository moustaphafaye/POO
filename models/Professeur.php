<?php
class Professeur extends Personne {

    //fonctions navigationels
    //ManyToMany avec classe

    public function __construct(){
        $this->role = "ROLE_PROFESSEUR";  
     }

    public function classes():array{
        return [];
    }
}