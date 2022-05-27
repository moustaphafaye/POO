
<div class="container mt-5">
 <h1 class="hh1">Lister Demande </h1>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>libele</th>
            <th>Etat</th>

        </tr>
    </thead>
    <tbody>
    <?php $a=1;?>

        <?php foreach ($annee as $ans) :?>
            <tr>
            
            <td><?= $a;?></td>
            <td><?=$ans->libelleanne?></td>
            <td><?= $ans->etat?></td>

            <td>
                        <button class='btn btn-outline-warning'>Accepter</button>
                        <button class='btn btn-outline-danger'>Refuser</button>
                    </td>
            </tr>
            
            <?php $a=$a+1;?>
       <?php endforeach ?>
    </tbody>
</table>
</div>
