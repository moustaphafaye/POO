<?php
namespace App\Core;
class Constantes{
    public const WEB_ROOT="http://localhost:8002/";

    public static function getWebRoot(){
        return (self::ROOT()."/public");
    }
    public static function ROOT(){

    return str_replace("public","",$_SERVER["DOCUMENT_ROOT"]);

    }
    
    
}
