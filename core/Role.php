<?php

namespace App\Core;

class Role{

    // private Session $session;
    // public function __construct(Session $session){
    //     $this->session=$session;
    // }
    public  static function isconnect():bool{
        return (isset($_SESSION['user']));

    }

    public  static function isRP():bool{
       
        return (self::isconnect() && $_SESSION['user']->role=='ROLE_RP');
    }

    public  static function isAC(){
        return (self::isconnect() && $_SESSION['user']->role=='ROLE_AC');
    }
    
    public  static function isEtudiant(){
        return (self::isconnect() && $_SESSION['user']->role=='ROLE_ETUDIANT');

    }
}