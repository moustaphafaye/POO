<?php

use App\Core\Router;
use App\Controller\SecurityController;
use App\Controller\ClasseController;
use App\Controller\PersonneController;
use App\Controller\ModuleController;
use App\Controller\DemandeController;
use App\Controller\InscriptionController;



use App\Controller\ProfesseurController;


use App\Exception\RouteNotFoundException;

$router=new Router();

$router->route('/formuler-demande',[DemandeController::class,"formulerDemande"]);
$router->route('/lister-demande',[DemandeController::class,"listerDemande"]);

$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/personne',[PersonneController::class,"lister"]);
$router->route('/lister-professeur',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/lister-module',[ModuleController::class,"listerModule"]);
$router->route('/creer-module',[ModuleController::class,"creerModule"]);
$router->route('/lister-classe',[ClasseController::class,"listerClasse"]);
$router->route('/modifier-classe',[ClasseController::class,"modifierClasse"]);

$router->route('/creer-classe',[ClasseController::class,"creerClasse"]);
$router->route('/ajouter-professeur',[ProfesseurController::class,"ajouterProfesseur"]);
$router->route('/inscrire-etudiant',[InscriptionController::class,"inscriptionEtudiant"]);

// $router->route('/demande',[DemandeController::class,"listerDemande"]);











// $router->resolve();


 try{
    //essaie de resoude la route
 $router->resolve();

 }catch(RouteNotFoundException $ex){
     //Capture l'exception et affiche
     echo $ex->message;
 }