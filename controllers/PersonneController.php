<?php
namespace App\Controller;
use App\Core\Controller;
use App\Core\Request;

class PersonneController extends Controller{
    
   public function lister(){
      $this->render('personne/liste.html.php');

   }
}