<?php
namespace App\Model;
class RP extends User{


    public function __constuct(){
        self::$role = "ROLE_RP";
    }
    public static function findAll():array{
        $sql="select * from ".parent::table()." where role like ?";
        return parent::findBy($sql,[self::$role],true);
    }
    public function classe():Classe{
        return new Classe();
    }
}