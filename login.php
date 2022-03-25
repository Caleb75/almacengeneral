
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<link rel="stylesheet" href="css/login.css" class="text/css">
<div class="container">
  <div class="row content">
    <div class="col-md-6 mb-3">
        <img src="images/almacen.png" class="img-fluid" alt="image">
        </div>
        <div class="col-md-6">
      <h3 class="signin-text mb-3">Iniciar sesión</h3>
      <form action="loguear.php" method="POST"> 
        <div class="form-group">
          <label for="email">Correo Electronico</label>
          <input type="email" name="email_user" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" name="contraseña" class="form-control">
          <?php
       if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
       {
          echo "<div style='color:red'>Usuario o contraseña invalido </div>";
       }
     ?>
        </div>
        <br>
        <div class="form-group form-check">
          <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
          <label class="form-check-label" for="checkbox">Recordar</label>
        </div>
        <br>
        <button class="btn btn-class">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
