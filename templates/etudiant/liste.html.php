

<div id="listerprof" class="container mt-5">
 <h1 class="hh1">Liste des etudiants</h1>
 <!-- <a href="<?=$Constantes::WEB_ROOT."ajouter-professeur"?>"> <button type="button" class="btn btn-success">Ajouter Professeur</button></a> -->
   
    <table class="table table-hover ">
        <thead>
            <tr>
            
                <th>#</th>
                <th>Nom Complet</th>
                <th>Matricule</th>
                <th>Adresse</th>
                <th>Sexe</th>

            </tr>
        </thead>
        <tbody>
        <?php $A=1;?>
            <?php foreach ($etudiant as $et):?>
                
                <tr>
                    <td><?=$A?></td>
                    <td><?=$et->nom_complet?></td>
                    <td><?=$et->matricuke?></td>
                    <td><?=$et->adresse?></td>
                    <td><?=$et->sexe?></td>


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

