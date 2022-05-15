<?php
namespace App\Core;
interface IModel{
    //abstraintes
    //instances
    public function update():int;
    public function insert():int;

    //static 
    public static function delete(int $id):int;
    public static function findAll():array;
    public static function findById(int $id):object|null;
    public static  function findBy(string $sql,array $data=null,$single=false ):object|null|array;



   
    //select * from personne where nom_complet like "Diop";
    //select * from personne where login=limzo and password=limzo;

}

//Methode static est une methode de classe 
//Methode d'instance est est une methode d'objet
//etat de l'Objet => valeurs de ses attributs
/**
 * $obj=new Classe();
 * 
 * $obj->methode();
 * Classe::methode();
 */