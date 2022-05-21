<?php
namespace App\controller;

use App\Core\Controller;
use App\Core\Request;
class ClasseController extends Controller{

    
    public function listerClasse(){

        if($this->request->isGet()){   
            $this->render('classe/listerClasse.html.php');
        }
    }
     public function creerClasse(){

        if($this->request->isGet()){   
            $this->render('classe/creerClasse.html.php');
        }
    }
    
}