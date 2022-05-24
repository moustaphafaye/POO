
<div class="container mt-5">
 <h1 class="hh1">Lister Demande </h1>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Motif</th>
            <th>Date</th>
            <th>Etat</th>

        </tr>
    </thead>
    <tbody>
    <?php $a=1;?>

        <?php foreach ($demande as $dem) :?>
            <tr>
            <td><?= $a;?></td>
            <td><?= $dem->motif?></td>
            <td><?= $dem->date?></td>
            <td><?= $dem->etat?></td>

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
