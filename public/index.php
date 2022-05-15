<?php
//inclusion du fichier  de la classe
//composer à faisant l'autoloading
use App\Controller\SecurityController;
use App\Controller\ClasseController;
use App\Core\Router ;

use App\Exception\RouteNotFoundException;





require("../vendor/autoload.php");
require_once("../core/fonction.php");
$router=new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classes',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);

// $router->resolve();


 try{
    //essaie de resoude la route
 $router->resolve();

 }catch(RouteNotFoundException $ex){
     //Capture l'exception et affiche
     echo $ex->message;
 }

// require_once("../models/User.php");
// require_once("../models/AC.php");
// require_once("../models/Inscription.php");

// $ac=new AC();
// $ac->setNomComplet("limzo FAYE");
 // $ac->setPassword("zo");
// $ac->insert();




// $personne=new Personne();
// echo Personne::table();//Personne => table personne
// echo User::table();//User => personne
// echo RP::table();//RP => personne

//Composer est utilisé pour de l'autoloading


//  Personne::findAll();//select * from Personne
//  Professeur::findAll(); 
//Composer => Outils de gestionnaire de dependance
//  AC::findAll();

// User::finAll();
//select * from Personne where role not like "ROLE_PROFESSEUR"
// AC::findAll();
//select * from Personne where role not like "ROLE_AC"
// Professeur::findAll();
//select * from Personne where role not like "ROLE_PROFESSEUR"