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
       self::$role = "ROLE_AC";
       $this-> inscription=[];
    
    }
    public static function findAll():array{
        $sql="select * from ".self::$table." where role like '".self::$role."'";
        return[];
    }
    //select * from personne where nom_complet like "Diop";
    //select * from personne where login=limzo and password=limzo;

} 