<?php
class RP extends User{


    public function __constuct(){
        self::$role = "ROLE_RP";
    }
    public static function findAll():array{
        $sql="select * from ".self::$table." where role like '".self::$role."'";
        echo $sql;
        return[];
    }
}