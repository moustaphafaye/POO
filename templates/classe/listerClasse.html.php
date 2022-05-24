<?php
use App\Model\Classe;
$classe = Classe::findAll();
?>
<div class="container mt-5">
 <h1 class="hh1">Lister Classe</h1>
<table class="table table-hover ">
    <thead>
        <tr>
            <th>libele</th>
            <th>filiere</th>
            <th>niveau</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($classe as $clas) {
            echo "<tr>";
            echo "<td>".$clas->libele."</td>";
            echo "<td>".$clas->filiere."</td>";
            echo "<td>".$clas->niveau."</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</div>
