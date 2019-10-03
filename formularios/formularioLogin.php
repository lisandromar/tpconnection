<?php
  require_once('../controladores/funciones.php');
  require_once('../helpers.php');
  if($_POST){
    $errores = validarLogin($_POST);
    if(count($errores)==0){
      $usuario = buscarPorEmail($_POST['email']);
      if($usuario==null){
        $errores['email']="Usuario no encontrado...";
      }else{
        //Desde aquí incio mi revisión a ver que ocurre con los contenidos de las variables y tratar de ver que ocurre
        //Aquí ví que el dato viene bien, es decir el password hasheado
        //dd($usuario['password']);
        //Ahora veo que trae esta variable  y noto que trae el dato correctamente
        //dd($_POST['password']);
        //Aquí estaba el error a la función password_verify, se le debe psar primero el dato no hasheado y luego el hasheado, ese fue mi error, lo habia pasado al contrario
        if(password_verify($_POST['password'],$usuario['password'])===false){
          $errores['password']="Datos inválidos...";
        }else{
          seteoUsuario($usuario,$_POST);
          if(validarUsuario()){
            header('location:../Perfil/Usuario.php');
            exit;
          }else{
            header('location:formularioLogin.php');
            exit;
          }
        }
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
    <title>Formulario Login</title>
    <link rel="stylesheet" href="../css/JMO.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../animate.css-master/animate.css">

</head>
<body>
  <div class="bg-dark vh-100 vw-100">
  <div class="jmo_container">
      <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark "  >
          <a class="navbar-brand text-secondary " href="../index.php">Connection</a>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto  ">
              <li class="nav-item">
                <a class="nav-link  text-secondary" href="../Perfil/Usuario.php">Muro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="../Perfil/posteos_y_amigos.php">Comunidad</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-secondary" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Preguntas</a>
                <div class="dropdown-menu bg-dark text-secondary" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-secondary" href="#preguntas">De qué se trata todo esto</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-secondary" href="#tracks">Tracks del Mes</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-secondary" href="#">Lugares</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="formularioContacto.html">Contacto</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2 bg-dark" type="search" placeholder="Buscar contenido" aria-label="Search">
              <button class="btn btn-outline-light my-2 my-sm-0 botonLogin" type="submit"><a href="formularioLogin.html">Login</a></button>
            </form>
          </div>
        </nav>
      </header>
      <br>
      <br>
      <br>
      <div class="">
        <section class="formularioLogin">
        <div id="formContainer" class="row align-items-center">
          <div class="col-8 offset-2  ">
            <h1>Iniciar Sesión</h1>
            <?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $value) :?>
                    <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
            <?php endif;?>

        <form id="formulario"  class="form" name="formLogin"     novalidate action=""  method="POST" enctype="multipart/form-data" >

                <div class="form-group">
                  <label for="email">Correo electrónico</label>
                  <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo" value= "<?=isset($errores['email'])? "":old('email') ;?>"
                </div>

                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input required name="password" type="password" value= "" class="form-control" id="password" placeholder="Contraseña">

                  <small class="form-text text-muted">Al menos 6 caracteres, debe contenter sólo números</small>
                </div>

                <div class="form-group">
                  <input  class="text-left" name="recordarme" type="checkbox" value= "recordarme" class="form-control " id="recordarme" >
                  <label for="recordarme">Recordarme</label>
                </div>

                <button type="submit" class="btn btn-primary">Ingresar</button>
                <a href="formularioRegistro.php" class="btn btn-link">Aun no poseo una cuenta</a>
                <a href="olvidePassword.php" class="btn btn-link">¿Olvidaste tu contraseña?</a>
              </form>
        </div>





    </div>
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
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>