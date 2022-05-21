<?php
//inclusion du fichier  de la classe
//composer à faisant l'autoloading

use App\Model\AC;
use App\Model\Professeur;
use App\Model\Module;
use App\Model\AnneeScolaire;
use App\Model\RP;
use App\Model\Classe;
use App\Model\Etudiant;
use App\Model\Demande;







require("../vendor/autoload.php");
require_once("../core/fonction.php");

require_once("../routes/route.web.php");

// $dem=new Demande();
// $dem->setMotif("Je suis hors du pays");
// $dem->setDate('2023-08-20 10:15:00');
// $dem->setEtat("valider");
// $dem->insert();
// $et=new Etudiant();
// $et->setNomComplet('koni js');
// $et->setLogin('konijs@gmail.com');
// $et->setPassword('123Z');
// $et->setMatricule('M123');
// $et->setSexe('M');
// $et->insert();
// require_once("../models/User.php");
// require_once("../models/AC.php");
// require_once("../models/Inscription.php");
// $rp=new Classe();
// $rp->setLibele("PHP");
// $rp->setFiliere("informatique");
// $rp->setNiveau("M1");
// $rp->insert();
/* $ac= new AC();
$ac->setNomComplet("Moussa faye");
$ac->setLogin("mouyyyy3@gmail.com");
$ac->setPassword("lomzo");
$ac->insert(); */


//  $rp= new RP();
// $rp->setNomComplet("Moussa faye");
// $rp->setLogin("mouyaaaaaaa3@gmail.com");
// $rp->setPassword("lomzo");
// $rp->insert(); 
// dd(RP::getRole());




// $personne=new Personne();
// echo Personne::table();//Personne => table personne
// echo User::table();//User => personne
// echo RP::table();//RP => personne

//Composer est utilisé pour de l'autoloading


//  Personne::findAll();//select * from Personne
//  Professeur::findAll(); 
//Composer => Outils de gestionnaire de dependance
//  AC::findAll();

// User::finAll();
//select * from Personne where role not like "ROLE_PROFESSEUR"
// AC::findAll();
//select * from Personne where role not like "ROLE_AC"
// Professeur::findAll();
//select * from Personne where role not like "ROLE_PROFESSEUR"