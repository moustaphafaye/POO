<?php
namespace App\Core;
abstract class Model implements IModel {

  

   protected static function database():DataBase{
        return new DataBase();
   }
    public static function table():string{
        
         $table=get_called_class();
         $table=str_replace("App\\Model\\","",$table);
        //  dd($table);
         $table= ($table=="User" or $table=="AC" or $table=="Professeur" or $table=="RP" or $table=="Etudiant")?"personne":strtolower($table);
         
         return $table;
    }


    public function __construct(){

    }
    public function insert():int{
        return 0; 
    }
    public function update():int{
        
        return 0;
    }
    public static function delete(int $id):int{
        return 0;
    }
    public static function findAll():array{
        $db=self::database();
        $db->connexionDB();
        $sql="select * from ".self::table();
        $result=$db->executeSelect($sql);
        // echo $sql;
        $db->closeConnexion();
        return $result;
    }
    public static function findById(int $id):object|null|array{
        $db=self::database();
        $db->connexionDB();
        $sql="select * from ".self::table()." where id=?";
        $result=$db->executeSelect($sql,[$id]);
        $db->closeConnexion();
        return $result;
    }
    public static function findBy(string $sql,array $data=null,$single=false ):object|null|array{
        $db=self::database();
        $db->connexionDB();
        $result=$db->executeSelect($sql,$data,$single);
        
        $db->closeConnexion();
        return $result;
       
    }
}