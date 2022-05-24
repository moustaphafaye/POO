<?php
namespace App\controller;
use App\Core\Controller;
use App\Model\Demande;

class DemandeController extends Controller{

    public function formulerDemande(){
        $this->request->isget();
        $this->render('demande/formulerDemande.html.php');
    }
    public function listerDemande(){
        $this->request->isget();
        $demande= Demande::findAll(); 
        $data=[
            "demande"=>$demande

        ];
        $this->render('demande/listerDemande.html.php',$data);
    }
}