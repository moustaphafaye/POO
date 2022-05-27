<?php
namespace App\controller;
use App\Core\Controller;
use App\Model\Professeur;

class ProfesseurController extends Controller{

    public function affecterClasse(){

    }
    public function ajouterProfesseur(){
        
        if($this->request->isGet()){   
            $this->render('professeur/ajouterProfesseur.html.php');
        }   
        if($this->request->isPost()){
            $prof=new Professeur();
            $prof->setNomComplet($_POST['nom_complet']);
            $prof->setGrade($_POST['grade']);
            $prof->insert();
            $this->render('professeur/listerProfesseur.html.php');
        }
    }
    public function listerProfesseur(){
        if($this->request->isGet()){  
            $profs=Professeur::findAll(); 
            $data=[
                "prof"=>$profs,

            ];
            
            $this->render('professeur/listerProfesseur.html.php',$data);
        }

    }

}