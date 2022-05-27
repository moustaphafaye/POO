<?php
namespace App\controller;

use App\Core\Controller;
use App\Model\Classe;
use App\Model\Etudiant;

class EtudiantController extends Controller{
    public function listerEtudiant(){
        if($this->request->isGet()){ 
            $etudiant=Etudiant::findAll(); 
                $data=[
                    "etudiant"=>$etudiant
    
                ];
                
                $this->render('etudiant/liste.html.php',$data);
            
      
        }
    }
}

