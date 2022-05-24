
<div class="container mt-5">
 <h1 class="hh1">Lister Classe</h1>
 
<table class="table table-hover ">
    <thead>
        <tr>
    
            <th>#</th>
            <th>libele</th>
            <th>filiere</th>
            <th>niveau</th>
            <th>Acteur</th>


        </tr>
    </thead>
    <tbody>
        <?php foreach ($classe as $clas) :?>
            <tr>
            <th><?=$clas->id?></th>
            <td><?=$clas->libele?></td>
            <td><?=$clas->filiere?></td>
            <td><?=$clas->niveau?></td>
            <td>
            <a href="<?= $Constantes::WEB_ROOT."modifier-classe/".$clas->id ?>"> <button class='btn btn-outline-warning'>Modifier <?= $class->id ?></button></a>

            </td>

 
            </tr>

 <?php 
 //$a++; 
 ?>
        
        <?php endforeach?>
    </tbody>
</table>
</div>
