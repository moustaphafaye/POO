<?php
namespace App\Core;
class Constantes{
    public const WEB_ROOT="http://localhost:8002/";
    public const WEB_PUBLIC="http://localhost:8002/";

    public static function getWebRoot(){
        return (self::ROOT()."/public");
    }
    public static function ROOT(){

    return str_replace("public/index.php","",$_SERVER["SCRIPT_FILENAME"]);

    }
    
    
}
