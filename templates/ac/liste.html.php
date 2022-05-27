<!-- <?php

use App\Core\Constantes;
?> -->


<div id="listerprof" class="container mt-5">
 <h1 class="hh1">Lister Professeur</h1>
 <!-- <a href="<?=$Constantes::WEB_ROOT."ajouter-professeur"?>"> <button type="button" class="btn btn-success">Ajouter Professeur</button></a> -->
   
    <table class="table table-hover ">
        <thead>
            <tr>
            
                <th>#</th>
                <th>Nom Complet</th>
                <th>Adresse</th>
                <th>sexe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $A=1;?>
            <?php foreach ($ac as $acc):?>
                
                <tr>
                    <td><?=$A?></td>
                    <td><?=$acc->nom_complet?></td>
                    <td><?=$acc->adresse?></td>
                    <td><?=$acc->sexe?></td>


                    <td>
                        <button class='btn btn-outline-warning'>Modifier</button>
                        <button class='btn btn-outline-danger'>Suprimer</button>
                    </td>
                <?php $A=$A+1;?>
                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

