<?php
namespace App\controller;
use App\Core\Role;
use App\Model\User;
use App\Core\Controller;

class SecurityController extends Controller{
   
    public function authentification(){
        
        //1-Affichage du formulaire de connexion=>GET
        if($this->request->isGet()){
            // dd(Role::isconnect());
            $this->render('security/login.html.php');

        
        }
        if($this->request->isPost()){
            $userconnect=User::findUserByLoginAndPassword($_POST['login'],$_POST['password']);
            
            if($userconnect!=NULL){
                session_start();
                $_SESSION["user"]=$userconnect;
            //    var_dump($_SESSION["user"]->role);
    
                $this->render('professeur/listerProfesseur.html.php');
                // $this->redirecToRoute("lister-classe");


            }   
            else{
                $this->render('security/login.html.php');

            }

        }

        //2-traitement apres soumission => POST
    }
    public function deconnexion(){
        session_destroy();
        $this->redirecToRoute("login");
        exit();
    }

}