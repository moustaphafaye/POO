<?php
use App\Core\Constantes;
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <section class="vh-70">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
      <form name="fo" method="post" action="<?=Constantes::WEB_ROOT."login"?>" >
       
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Email address</label>

            <input type="email"name="login" id="form1Example13" class="form-control form-control-lg" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Password</label>

            <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Authentification</button>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">KONI</p>
          </div>
        </form> 
      </div>
    </div>
  </div>
</section>
</body>
</html>
    