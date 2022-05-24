
<div class="container mt-5">
 <h1 class="hh1">Lister Module</h1>
    
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>libelle</th>
        </tr>
    </thead>
    <tbody>
    <?php $a=1;?>

        <?php foreach ($module as $mod) :?>
            <tr>
            <td><?= $a;?></td>
            <td><?= $mod->libelleModule?></td>
            <td>
                        <button class='btn btn-outline-warning'>Modifier</button>
                        <button class='btn btn-outline-danger'>Suprimer</button>
                    </td>
            </tr>
            
            <?php $a=$a+1;?>
       <?php endforeach ?>
    </tbody>
</table>
</div>
