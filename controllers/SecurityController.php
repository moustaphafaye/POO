<?php
namespace App\controller;
use App\Core\Controller;

class SecurityController extends Controller{
   
    public function authentification(){
        //1-Affichage du formulaire de connexion=>GET
        if($this->request->isGet()){
            $this->render('security/login.html.php');
        }

        //2-traitement apres soumission => POST
    }
    public function deconnexion(){

        $this->redirecToRoute("login");
    }

}