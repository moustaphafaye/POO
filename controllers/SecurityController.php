<?php
namespace App\controller;
use App\Core\Role;
use App\Model\User;
use App\Model\Demande;
use App\Core\Controller;
use App\Model\Professeur;


class SecurityController extends Controller{
   
    public function authentification(){
        //1-Affichage du formulaire de connexion=>GET
        if($this->request->isGet()){
            // $this->layout="connexion";
            $this->render('security/login.html.php');
        }

        if($this->request->isPost()){
            $userconnect=User::findUserByLoginAndPassword($_POST['login'],$_POST['password']);
            
            if($userconnect!=NULL){
                $_SESSION["user"]=$userconnect;
            //    var_dump($_SESSION["user"]->role);
                   $id=( $_SESSION["user"]->id);
                   
                    $_SESSION["qui"]=$id;
            $role=new Role();
            if( $role::isRP()){
                $profs=Professeur::findAll(); 
                $data=[
                    "prof"=>$profs,
    
                ];
            $this->render('professeur/listerProfesseur.html.php',$data);

            }else if($role::isAC()){
                $demande= Demande::findAll(); 
                $data=[
                    "demande"=>$demande
        
                ];
                $this->render('demande/listerDemande.html.php',$data);

            }

            // $this->render('professeur/listerProfesseur.html.php');
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
         session_unset();
         $this->redirecToRoute("login"); 
         exit();    
        
    }

}