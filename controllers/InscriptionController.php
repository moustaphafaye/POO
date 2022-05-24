<?php
namespace App\controller;
use App\Core\Controller;
use App\Model\Inscription;

class InscriptionController extends Controller{

    public function inscriptionEtudiant(){
       
        $this->request->isget();
       
        $this->render('inscription/inscription.html.php');
       
    }
    // public function listerDemande(){
    //     $this->request->isget();
    //     $demande= Demande::findAll(); 
    //     $data=[
    //         "demande"=>$demande

    //     ];
    //     $this->render('demande/listerDemande.html.php',$data);
    // }
}