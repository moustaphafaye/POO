<?php
namespace App\Core;
abstract class Model implements IModel {

  

   protected static function database():DataBase{
        return new DataBase();
   }
    public static function table():string{
        
         $table=get_called_class();
         $table=str_replace("App\\Model\\","",$table);
         $table= ($table=="User" or $table=="AC" or $table=="Professeur" or $table=="RP")?"personne":strtolower($table);
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
        $db=self::database();
        $db->connexionDB();
        //Requete non préparer est une requete dont la variable est injecter lors de l'écriture de la requete
        $sql="delete from ".self::table()." where id=$id";//Pas bon
        $result=$db->executeUpdate($sql);
        echo $sql;
        $db->closeConnexion();
        return $result; 
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
    public static function findById(int $id):object|null{
        $db=self::database();
        $db->connexionDB();
        //Requete  préparer est une requete dont la variable est injecter lors de l'execution de la requete
        //A lécriture on met un jocker(?) à la place de la variable
        //les jocker ont des position ,le premier on le met à la position 0 le deuxieme à la position 2  ainsi de suite

        $sql="select * from '".self::table()."'where id=?";
        $result=$db->executeSelect($sql,[$id]);
        // echo $sql;
        $db->closeConnexion();
        return $result;
    }
    public static function findBy(string $sql,array $data=null,$single=false ):object|null|array{
        $db=self::database();
        $db->connexionDB();
        $result=$db->executeSelect($sql,$data,$single);
        // echo $sql;
        $db->closeConnexion();
        return $result;
       
    }
}