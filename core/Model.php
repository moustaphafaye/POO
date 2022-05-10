<?php
abstract class Model implements IModel {
    protected static string $table;


    public function __construct(){

    }
    public function insert():int{
        return 0; 
    }
    public function update():int{
        
        return 0;
    }
    public static function delete(int $id):int{
        $sql="delete from'".self::$table."'where id=$id";
        echo $sql;
        return 0; 
    }
    public static function findAll():array{
        $sql="select * from '".self::$table."'";
        echo $sql;
        return[];
    }
    public static function findById(int $id):objet|null{
        $sql="select * from '".self::$table."'where id=$id";
        echo $sql;
        return null;
    }
    public static function findBy(string $sql,array $data=null,$single=false ):objet|null|array{
        return null;
    }
}