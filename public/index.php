<?php
//inclusion du fichier  de la classe
require_once("../models/Personne.php");
require_once("../models/User.php");
require_once("../models/AC.php");
require_once("../models/Inscription.php");


//creer un objet ou instanciation
// $pers1=new Personne();
//appel de la methode nommee le constructeur
//donne un etat a un objet
//->:operation de portee d'Instance
// $pers1->setId(1);
// $pers1->setNomComplet('Moustapha FAYE');

// $pers2->setId(1)
//       ->setNomComplet('Moustapha FAYE');


// echo $pers1->getId();
// echo $pers1->setNomComplet();  
//appel d'une metoded static
// Personne::setNbrePersonne(12);
// echo Personne::getNbrePersonne;
$ac=new AC();
echo $ac->getRole();
$ins= new Inscription();
$ins->ac();
$ins->anneeScolaire();