<?php

namespace App\Core;

class Role{

    private Session $session;
    public function __construct(Session $session){
        $this->session=$session;
    }
    public  static function isconnect(){

    }
    public  static function isRP(){

    }
    public  static function isAC(){

    }
    public  static function isEtudinat(){

    }
}