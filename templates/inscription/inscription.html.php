
<!-- <section class="vh-70"> -->
  <div class="container py-5 h-100">
 <h1 class="hh1">Inscription d'étudiant  </h1>

        <div class="row d-flex align-items-center justify-content-center h-100">
           
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form id="formulaire" class="bg-success " name="fo" method="post" action="" >
                
                
                    <div  class="form-outline dis ">
                        <div class="separe">
                        <label class="form-label" for="form1Example13">Nom_Complet</label>

                        <input type="text"name="nom_complet" id="form1Example13" class="form-control form-control-lg" />
                        </div>
                        <div class="separee">
                        <!-- <select class="custom-select"style="width:150px;">
                             -->
                            <?php

use App\Core\Role;
use App\Model\Classe;
use App\Model\AnneeScolaire;

 ?>
                           
                        <?php $classes=new Classe();
                        $classe=Classe::findAll();
                        $anne=AnneeScolaire::findAll2();
                        ?>
                        <select name="classe" id="classe" >
                        <option disabled selected value="0" >Selection une classe</option>
                        <?php foreach($classe as $class) : ?>
                            <option value="<?=$class->id;?>"><?php echo ($class->libele); ?></option>
                        <?php endforeach ?>
                         </select>
                        <!-- <label class="form-label" for="form1Example13">Classe</label> -->

                        <!-- <input type="text"name="classe" id="form1Example13" class="form-control form-control-lg" /> -->
                        </div>
                    </div>
                    <div  class="form-outline dis ">
                        <div class="separe">
                        <label class="form-label" for="form1Example13">Login</label>

                        <input type="login"name="login" id="form1Example13" class="form-control form-control-lg" />
                        </div>
                        <div class="separee">
                        <label class="form-label" for="form1Example13">Password</label>

                        <input type="password"name="password" id="form1Example13" class="form-control form-control-lg" />
                        </div>
                    </div>

                    <!-- Password input -->
                    <div  class="form-outline dis ">
                        <div class="separe">
                        <label class="form-label" for="form1Example13" >ID_AC</label>
                            <?php if(Role::isAC()):?>
                        <input type="number"name="id_ac" value="<?=$_SESSION["qui"];?>" id="form1Example13" class="form-control form-control-lg" />
                                <?php endif ?>
                        </div>
                        <div class="separee">
                        <select name="annee" id="annee" >
                        <?php foreach($anne as $ans) : ?>
                            <option value="<?=$ans->id;?>"><?php echo ($ans->libelleanne); ?></option>
                        <?php endforeach ?>
                         </select>

                        </div>
                    </div>
                    <div class="form-outline ">
                        <label class="form-label" for="form1Example23">Adresse</label>

                        <input type="text" name="adresse" id="form1Example23" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline dis  mb-4">
                    <div class="separe">
                        <label class="form-label" for="form1Example13">Sexe</label>

                        <input type="text"name="sexe" id="form1Example13" class="form-control form-control-lg" />
                        </div>
                        <div class="separee">
                        <label class="form-label" for="form1Example13">Matricule</label>

                        <input type="text"name="matricule" id="form1Example13" class="form-control form-control-lg" />
                        </div>
                    </div>

                    <!-- <div class="d-flex justify-content-around align-items-center mb-4">
                        
                    </div> -->

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block ">Enregistrer</button>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">KONI</p>
                    </div>
                </form> 
            </div>
            
        </div>
  </div>
<!-- </section> -->