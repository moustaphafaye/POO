<?php
use App\Model\Professeur;
$professeurs = Professeur::findAll();
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Nom Complet</th>g
            <th>Grade</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($professeurs as $professeur) {
            echo "<tr>";
            echo "<td>".$professeur->nom_complet."</td>";
            echo "<td>".$professeur->grade."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
