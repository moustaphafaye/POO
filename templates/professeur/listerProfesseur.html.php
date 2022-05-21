<?php
use App\Model\Professeur;
$professeurs = Professeur::findAll();
?>

<div class="container mt-5">
   
    <table class="table table-hover ">
        <thead>
       <a href=""> <button type="button" class="btn btn-success">Ajouter Professeur</button></a>
            <tr>
                <th>Nom Complet</th>
                <th>Grade</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($professeurs as $professeur):?>
                <tr>
                    <td><?=$professeur->nom_complet?></td>
                    <td><?=$professeur->grade?></td>
                    <td>
                        <button class='btn btn-outline-warning'>Modifier</button>
                        <button class='btn btn-outline-danger'>Suprimer</button>
                    </td>
                    
                </tr>
            
            <?php endforeach ?>
        </tbody>
    </table>
</div>

