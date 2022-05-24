<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Module;

class ModuleController extends Controller{

    public function creerModule(){
        
            if($this->request->isGet()){
                $this->render('module/creerModule.html.php');
            }
            if($this->request->isPost()){
                
                $mod=new Module();
                $mod->setLibelleModule($_POST['libelleModule']);
                $mod->insert();
                
                $this->render('module/listerModule.html.php');

            }
    }
    public function listerModule(){
        if($this->request->isGet()){ 

            $module= Module::findAll(); 
            $data=[
                "module"=>$module

            ];

            $this->render('module/listerModule.html.php',$data); 
            // $this->render('module/listerModule.html.php');
        }

    }
    

}