<?php
namespace App\controller;

use App\Core\Constantes;
use App\Core\Controller;
use App\Model\AnneeScolaire;

class AnneeEncourController extends Controller{
    public function anneeEncours(){
        if($this->request->isGet()){
            $annee=AnneeScolaire::findAll(); 
                $data=[
                    "annee"=>$annee
    
                ];
                
                $this->render('annee/liste.html.php',$data);
            
        }
    }
}


