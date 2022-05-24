<?php
namespace App\controller;

use App\Core\Controller;
use App\Model\Classe;
class ClasseController extends Controller{

    
    public function listerClasse(){

        if($this->request->isGet()){ 
             
                $classe=Classe::findAll(); 
                $data=[
                    "classe"=>$classe
    
                ];
    
                $this->render('classe/listerClasse.html.php',$data);
            
      
        }
    }
    public function modifierClasse(){

        if($this->request->isGet()){   
            // die($this->request->getUri()[1]);
            $idModifier = $this->request->getUri()[1];
            
            $this->render('classe/creerClasse.html.php');
        }
        if($this->request->isPost()){
            // dd("salut");
            $prof=new Classe();
            $prof->setId($_POST['id']);

            $prof->setLibele($_POST['libele']);
            $prof->setFiliere($_POST['filiere']);
            $prof->setNiveau($_POST['niveau']);
            $prof->update();
            
            $classe=Classe::findAll(); 
                $data=[
                    "classe"=>$classe
    
                ];
            
            $this->render('classe/listerClasse.html.php',$data);



        }
    }
     public function creerClasse(){

        if($this->request->isGet()){ 
            
            
            $this->render('classe/creerClasse.html.php');
        }
         if($this->request->isPost()){
            $prof=new Classe();

            $prof->setLibele($_POST['libele']);
            $prof->setFiliere($_POST['filiere']);
            $prof->setNiveau($_POST['niveau']);
            $prof->insert();
           
            $classe=Classe::findAll(); 
                $data=[
                    "classe"=>$classe
    
                ];
            
            $this->render('classe/listerClasse.html.php',$data);

         }
    }
    
}