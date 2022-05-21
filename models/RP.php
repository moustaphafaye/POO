<?php
namespace App\Model;
class RP extends User{


    public function __constuct(){
        parent::$role = "ROLE_RP";
    }

    public static function findAll():array{
        $sql="select * from ".parent::table()." where role like ?";
        return parent::findBy($sql,[self::$role],true);
    }

    public function classe():Classe{
        return new Classe();
    }
    
    public function insert():int{
        
        $db=parent::database();
        
        $db->connexionDB();
        
        //Requete non préparer est une requete dont la variable est injecter lors de l'écriture de la requete
        
        $sql="INSERT INTO `personne` (`nom_complet`,`role`,`login`,`password`) VALUES (?,?,?,?)";

        //dd($sql);
        
        $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password]);
        
        $db->closeConnexion(); 
        
        return $result;
       
     }

}