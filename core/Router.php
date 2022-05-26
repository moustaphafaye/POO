<?php
namespace App\Core;

use App\Core\Role;
use App\Core\Request;
use App\Controller\SecurityController;
use App\Exception\RouteNotFoundException;

class Router {
    private Request $request;

    public function __construct(){
       $this->request=new Request; 
    }

    private array $routes=[];
    public function route(string $uri,array $action){
        $this->routes[$uri]=$action;
    }

    public function resolve(){
// var_dump($this->request->getUri()[0]);

        $uri="/".$this->request->getUri()[0];
        if(isset($this->routes[$uri])){
                // if(!(Role::isconnect())){
                // header("location:".Constantes::WEB_ROOT.'login');
                    
                // } 
                $route=$this->routes[$uri];
                [$ctrClass,$action]=$route;

                // [$ctrClass]=$route[0]; 
                // [$action]=$route[1];
                //  dd($action);
                if(class_exists($ctrClass) && method_exists($ctrClass,$action)){
                    $ctrl= new $ctrClass($this->request);//$ctrl=new SecurityController()
                    // $ctrl->{$action()};//$ctrl->authentificatio()
                    call_user_func(array($ctrl,$action));
                } else{

                    throw new RouteNotFoundException();
                }
        }else{

            $obj = new SecurityController($this->request);
            call_user_func(array($obj,"authentification"));
            // throw new RouteNotFoundException();
            header("location:login");
            

        }
    }
}


// if(isset($this->routes[$uri])){
//     dd("route exite");
// }else{
//     throw new RouteNotFoundException();
// }