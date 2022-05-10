<?php
//inclusion du fichier  de la classe
//composer à faisant l'autoloading
require_once("../core/IModel.php");
require_once("../core/Model.php");
 require_once("../models/Personne.php");
// require_once("../models/User.php");
// require_once("../models/AC.php");
// require_once("../models/Inscription.php");



$personne=new Personne();
Personne::findAll();//select * from Personne
// User::finAll();
//select * from Personne where role not like "ROLE_PROFESSEUR"
// AC::findAll();
//select * from Personne where role not like "ROLE_AC"
// Professeur::findAll();
//select * from Personne where role not like "ROLE_PROFESSEUR"