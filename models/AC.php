<?php
class AC extends User{

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
       $this->role = "ROLE_AC";
       $this-> inscription=[];
    
    }
}