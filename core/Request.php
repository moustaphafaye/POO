<?php
namespace App\Core;
class Request{
    
   public function getUri(){
// var_dump($_SERVER['REQUEST_URI']);die;
    $url=explode("/",$_SERVER['REQUEST_URI']);
    //var_dump($url);die;
    unset($url[0]);
      return array_values($url); 
   } 

   public function isGet(){

    return $_SERVER['REQUEST_METHOD']=='GET';
   }

   public function isPost(){

    return $_SERVER['REQUEST_METHOD']=='POST';
   }
}

