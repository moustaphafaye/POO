<?php
use App\Model\Module;
$module = Module::findAll();
?>
<div class="container mt-5">
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
</div>
