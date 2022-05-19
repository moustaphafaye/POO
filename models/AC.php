<?php
namespace App\Model;
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
       parent::$role = "ROLE_AC";
       $this-> inscription=[];
    
    }
    public static function findAll():array{
        $db=parent::database();
        $db->connexionDB();
        $sql="select id  ,`nom_complet`,`role`,`login`,`password` from ".parent::table()." where role like 'ROLE_AC'";
        $results=$db->executeSelect($sql);
        $db->closeConnexion(); 
        return $results;
    }
    //select * from personne where nom_complet like "Diop";
    //select * from personne where login=limzo and password=limzo;
    public function insert():int{
        
        $db=parent::database();
        
         $db->connexionDB();
         //Requete non préparer est une requete dont la variable est injecter lors de l'écriture de la requete
        $sql="INSERT INTO `personne` (`nom_complet`,`role`,`login`,`password`) VALUES (?,?,?,?)";
         $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password]);
        
         $db->closeConnexion(); 
         return $result;
       
     }
} 