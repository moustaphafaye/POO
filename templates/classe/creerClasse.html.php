
<section class="vh-70">
  <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="<?=$Constantes::WEB_ROOT."images/classe.jpg"?>"
                class="img-fluid  w-40 bg-success mt-2 " alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form id="formulaire" class="bg-success "  method="POST" action="<?=$action?>" >
                
                    <!-- Email input -->
                    
                    <div class="form-outline mb-4" >
                        <label class="form-label" for="form1Example13">libele</label>

                        <input type="text"name="libele" value="<?= isset($clas->filiere)?$clas->filiere:"" ?>" class="form-control form-control-lg" />
                        
                        
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example13" >Filiere</label>

                        <input type="text"name="filiere" value="<?= isset($clas->filiere)?$clas->filiere:"" ?>" id="form1Example13" class="form-control form-control-lg" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23">Niveau</label>

                        <input type="text" name="niveau"    value="<?= isset($clas->niveau)?$clas->niveau:"" ?>" id="form1Example23" class="form-control form-control-lg" />
                    </div>

                    <!-- <div class="d-flex justify-content-around align-items-center mb-4">
                        
                    </div> -->

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block" value="<?= isset($clas->libele)?>">Enregistrer</button>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">KONI</p>
                    </div>
                </form> 
            </div>
        </div>
  </div>
</section>