<?php
namespace App\controller;
use App\Model\Classe;
use App\Model\Etudiant;
use App\Core\Controller;
use App\Model\Inscription;

class InscriptionController extends Controller{

    public function inscriptionEtudiant(){
       
        if($this->request->isget()){

         $this->render('inscription/inscription.html.php');


        }
        if($this->request->isPost()){
            extract($_POST);
            $id=($_SESSION["qui"]); 
            
            $inscrit=new Inscription();
            $etudiant=new Etudiant();
            $etudiant->setNomComplet($nom_complet);
            $etudiant->setLogin($login);
            $etudiant->setPassword($password);
            $etudiant->setAdresse($adresse);
            $etudiant->setMatricule($matricule);
            $etudiant->setSexe($sexe);
            $se=$etudiant->insert();
            // dd($se);
            $inscrit=Inscription::lesid($id,$classe,$se,$annee);
            
            
            $etudiant=Etudiant::findAll(); 
            $data=[
                "etudiant"=>$etudiant

            ];
            
            $this->render('etudiant/liste.html.php',$data);
      
        }
       
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