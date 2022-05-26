<?php
    namespace App\controller;

use App\Core\Constantes;
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
    public function supprimerClasse(){
        if($this->request->isPost()){
            $idModifier = (int) $_POST['id'];
            
            // $delete=new Classe();
            $delete=Classe::delete($idModifier);
            
            if($delete >0){
            $classe=Classe::findAll(); 
                $data=[
                    "classe"=>$classe
    
                ];
                $this->render('classe/listerClasse.html.php',$data);
            // $this->render('classe/listerClasse.html.php');
            }else{
                $this->render('classe/listerClasse.html.php');
            }

        }
    }
    public function modifierClasse(){
            
        if($this->request->isGet()){
            
            // die($this->request->getUri()[1]);
            $id = $this->request->getUri()[1];
            $clas=Classe::findById($id);
            
            $this->render('classe/creerClasse.html.php'. $data=[
                "classe"=>$clas[0],
                "action"=>Constantes::WEB_ROOT."modifier-classe/".$clas[0]->id
            ]);
        }
        if($this->request->isPost()){
            // dd("salut");
            $prof=new Classe();
            $prof->setId($id);

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
            $class=new Classe();
            
            $class->setLibele($_POST['libele']);
            $class->setFiliere($_POST['filiere']);
            $class->setNiveau($_POST['niveau']);
            $class->insert();
           
            $classe=Classe::findAll(); 
                $data=[
                    "classe"=>$classe
    
                ];
                $this->render('classe/listerClasse.html.php',$data);
            

         }
    }
    
}