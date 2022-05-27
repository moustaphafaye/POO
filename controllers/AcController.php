<?php
namespace App\Controller;

use App\Model\AC;
use App\Core\Controller;

class AcController extends Controller{
   public function listerAc(){
    if($this->request->isGet()){
        $Ac=AC::findAll(); 
            $data=[
                "ac"=>$Ac

            ];
            
            $this->render('ac/liste.html.php',$data);
        
    }  
   }
}