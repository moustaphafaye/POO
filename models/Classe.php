<?php
class Classe extends Model {

    //fonctions navigationels
    //ManyToOne avec professeur

    public function __construct()
    {
        self::$table="classe";
    }
    public function professeurs():array{
        return [];
    }
    
}