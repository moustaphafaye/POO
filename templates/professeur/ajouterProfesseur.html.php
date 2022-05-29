
<section class="vh-70">
  <div class="container py-5 h-100">
 <h1 class="hh1">Ajouter  Professeur  </h1>

        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="<?=$Constantes::WEB_ROOT."images/maquette.webp"?>"
                class="img-fluid  w-40 bg-success mt-2 " alt="Phone image">
            </div>
            <div  class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form id="formulaire" class="bg-success " name="fo" method="post" action="" >
                
                    <!-- Email input -->
                    <div class="form-outline mb-4  ">
                        <label class="form-label" for="form1Example13">nom Complet</label>
                        <input name="nom_complet" id="form1Example13" class="form-control form-control-lg" />
                    </div>
                    <div  class="form-outline aligne mb-4">
                            <select class="clas"   id="example-single">

                                <option disabled selected value="0" >Selection un niveau</option>
                                <option value="1">Niveau 1</option>
                                <option value="2">niveau 2</option>
                                <option value="2">niveau 3</option>

                            </select>
                    </div>
                    <?php

                            use App\Core\Model;
                            use App\Core\Role;
                        use App\Model\Classe;
                        use App\Model\AnneeScolaire;
                            use App\Model\Module;

                        $classes=new Classe();
                        $module=new Module();
                        $module=Module::findAll();
                        $classe=Classe::findAll();                     
                    ?>
                    <div class="form-outline mb-4">
                        <div class="er">
                             <label class="form-label " for="form1Example13">La ou les Classes du professeur</label>
                        </div>
                            <select   class="select selectpicker " multiple data-mdb-placeholder="Example placeholder" multiple>
                        <?php foreach($classe as $class) : ?> 
                            <option value="<?= $class->id;?>"><?php echo ($class->libele); ?></option>
                                
                                <?php endforeach ?>
                            </select>
                        

                    </div>
                    <div class="form-outline mb-4">

                        <div class="er">
                             <label class="form-label " for="form1Example13">Le ou les Module du professeur</label>
                        </div>
                        
                            <select   class="select selectpicker " multiple data-mdb-placeholder="Example placeholder" multiple>
                                <?php foreach ($module as $mod) :?>
                                <option value="<?=$mod->id;?>"><?php echo ($mod->libelleModule);?></option>
                                <?php endforeach ?>
                            </select>
                        

                    </div>



                    <!-- Password input -->
                   

                    <!-- <div class="d-flex justify-content-around align-items-center mb-4">
                        
                    </div> -->

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Enregistrer</button>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">KONI</p>
                    </div>
                </form> 
            </div>
        </div>
  </div>
</section>