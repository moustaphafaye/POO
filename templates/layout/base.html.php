<?php

use App\Core\Constantes;
use App\Core\Role;
use App\Core\Session;

$role = new Role();
// $ses = new Session();

// var_dump($_SESSION["user"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=Constantes::WEB_ROOT.'bootstrap/dist/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?=Constantes::WEB_ROOT."css/style.css"?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body >
    <!-- <ul class="nav justify-content-end mt-1">
        <li class="nav-item">
            <a class="nav-link active" href="">Personne</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link disabled" href="">Deconnexion</a>
        </li>
    </ul> -->
    
<?php if(($_SESSION["user"])): ?>
    <nav class="navbar navbar-expand-md bg-primary mx-4">
    <ul class="navbar-nav">
    <?php if($role::isRP()):?>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle mx-1" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Professeur
            </button>
            

            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><button class="dropdown-item" type="button"> <a href="<?=Constantes::WEB_ROOT."lister-professeur"?>"> Lister Professeur </a></button></li>
                <li><button class="dropdown-item" type="button"> <a href="<?=Constantes::WEB_ROOT."ajouter-professeur"?>"> Ajouter Professeur </a></button></li>
                

                </ul>
      

        </div>
        <?php endif?> 

        <?php if($role::isAC() || $role::isRP()):?> 
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle bg-Danger " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Classse
            </button>
            <ul class="dropdown-menu " aria-labelledby="dropdownMenu2">
                <li><button class="dropdown-item" type="button"> <a href="<?=Constantes::WEB_ROOT."lister-classe"?>">Lister Classe</a> </button></li>
                <li><button class="dropdown-item" type="button"> <a href="<?=Constantes::WEB_ROOT."creer-classe"?>"> Creer Classe </a></button></li>
                <li><button class="dropdown-item" type="button">lister CLasse Professeur</button></li>

                </ul>
        </div>
        <?php endif?> 
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle mx-1" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Module
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><button class="dropdown-item" type="button"> <a href="<?=Constantes::WEB_ROOT."lister-module"?>"> Lister Module</a></button></li>
                <li><button class="dropdown-item" type="button"> <a href="<?=$Constantes::WEB_ROOT."creer-module"?>">Ajouter Module</a> </button></li>
                <li><button class="dropdown-item" type="button">Affecter Module</button></li>
                <li><button class="dropdown-item" type="button">lister Module Professeur</button></li>

                </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle mx-1" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Demande
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><button class="dropdown-item" type="button"> <a href="<?=Constantes::WEB_ROOT."lister-demande"?>"> Lister Demande</a> </button></li>
                <li><button class="dropdown-item" type="button"> Traiter Demande</button></li>
                <li><button class="dropdown-item" type="button">Filtrer Demande</button></li>
                <li><button class="dropdown-item" type="button"> Rechercher Demande </button></li>

                </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle mx-1" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Inscription 
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li> <a href="<?=$Constantes::WEB_ROOT."inscrire-etudiant"?>"> <button class="dropdown-item" type="button">Inscrire Etudiant </button></a></li>
                <li> <a href="<?=$Constantes::WEB_ROOT."lister-etudiant"?>"> <button class="dropdown-item" type="button"> Lister Etudiant</button></a></li>
                <li><button class="dropdown-item" type="button">Annuler Inscription</button></li>
                <li><button class="dropdown-item" type="button">Suspendre Inscription </button></li>

            </ul>
        </div>
        <div id="pousse" class="input-group ">
            <input type="search" class="form-control mr-sm-2 "style placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">search</button> 
        </div>
        <div class="end">
            <a href="logout"> <button type="button" class="btn btn-primary"> Deconnexion</button></a>

        </div>

    </ul>
</nav>
<?php endif ?>
<div class="contenue">
<?=$content_for_views?>

</div>
 

<script src="<?=Constantes::WEB_ROOT.'bootstrap/dist/js/bootstrap/bootstrap.min.js'?>"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>