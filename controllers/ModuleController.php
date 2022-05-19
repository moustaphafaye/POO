<?php
namespace App\Controller;
use App\Core\Controller;
class ModuleController extends Controller{

    public function affecterModule(){

    }
    public function listerModule(){
        if($this->request->isGet()){   
            $this->render('module/listerModule.html.php');
        }

    }

}