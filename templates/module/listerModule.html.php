<?php
use App\Model\Module;
$module = Module::findAll();
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>libelle</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($module as $mod) {
            echo "<tr>";
            echo "<td>".$mod->libelleModule."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
