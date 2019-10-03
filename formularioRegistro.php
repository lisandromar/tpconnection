<?php
  //Esto debo hacerlo, para lograr que este programa logré visualizar las funciones creadas y de esa forma poder usarlas cuando desee.
  require_once("controladores/funciones.php");
  require_once("helpers.php");
  if($_POST){
   $errores = validar($_POST,$_FILES);
   if(count($errores)==0){
    $usuario = buscarPorEmail($_POST["email"]);
    if($usuario !== null){
      $errores["email"]="Usuario ya registrado";
    }else{
      $registro = armarRegistro($_POST);
      guardarRegistro($registro);
     //De no excistir errores en la información tipeada por el usuario entonces lo redirecciono a donde yo desee.

      header("location:formularioLogin.php");
      exit;
    }

  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="css/JMO.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../animate.css-master/animate.css">

</head>
<body>
    <div class="bg-dark">
        <?php include_once('header.php');?>
        <br>
        <br>
        <br>
        <section class="formulario">
          <div id="formContainer" class="row align-items-center">
            <div class="col-8 offset-2  ">
              <h1>Registración</h1>
              <?php if(isset($errores)):?>
                <ul class="alert alert-danger">
                  <?php foreach ($errores as $value) :?>
                      <li><?=$value;?></li>
                  <?php endforeach;?>
                </ul>
              <?php endif;?>

              <form id="formulario"  class="form" name="formRegistro"     novalidate action=""  method="POST" enctype="multipart/form-data" >
                  <div class="form-group">
                      <label for="userName">Nombre de usuario</label>
                      <input required name="userName" type="text" value= "<?=isset($errores['username'])? "":old('userName') ;?>" class="form-control" id="userName" placeholder="Nombre de usuario">
                  </div>
                  <div>
                    <!--Aquí les comparto este otro código donde pueden mostrar el error en el mismo lugar donde se produjo, usted decide como desea mostrar los errores-->
                    <?php if(isset($errores['userName'])):?>
                      <h6 class="text-danger"><?= $errores['userName'];?></h6>
                    <?php endif;?>
                  </div>

                  <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo" value= "<?=isset($errores['email'])? "":old('email') ;?>">
                  </div>

                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input required name="password" type="password" value= "" class="form-control" id="password" placeholder="Contraseña">

                    <small class="form-text text-muted">Al menos 6 caracteres, debe contenter sólo números</small>
                  </div>

                  <div class="form-group">
                    <label for="password">Repetir contraseña</label>
                    <input required name="passwordRepeat" type="password" value= ""class="form-control" id="passwordRepeat" placeholder="Repetir contraseña">
                  </div>

                  <button type="submit" class="btn btn-primary">Registrarme</button>
                  <a href="formularioLogin.php" class="btn btn-link">Ya poseo una cuenta</a>
                </form>
              </div>
            </div>
          </section>
          <?php include_once('footer.php') ;?>
        </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
