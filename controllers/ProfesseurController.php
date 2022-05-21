<?php
namespace App\controller;
use App\Core\Controller;
class ProfesseurController extends Controller{

    public function affecterClasse(){

    }
    public function ajouterProfesseur(){
        if($this->request->isGet()){   
            $this->render('professeur/ajouterProfesseur.html.php');
        }
    }
    public function listerProfesseur(){
        if($this->request->isGet()){   
            $this->render('professeur/listerProfesseur.html.php');
        }

    }

}