<?php
require_once("controladores/funciones.php");
require_once("helpers.php");
 ?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/perfil.css">
    <title>Usuario</title>
  </head>
  <body>
      <div class="bg-dark">
      <?php include_once('header.php');?>
              <br><br><br><br>
              <h1 class="text-center">Mi perfil</h1>
              <div class="lPerfil text-left row">
                  <ul type="none" class="col 6">
                      <li>Nombre: <?= $_POST['nombre'] ?? ""; ?> </li>
                      <li>Apellido: <?= $_POST['apellido'] ?? ""; ?> </li>
                      <li>Email: <?= $_POST['email'] ?? ""; ?> </li>
                      <li>Teléfono: <?= $_POST['telefono'] ?? ""; ?> </li>
                      <li>Pagina web: <?= $_POST['web'] ?? ""; ?> </li>
                      <li>Canal de youtube: <?= $_POST['youtube'] ?? ""; ?> </li>
                  </ul>
                  <div class="imagen text-center">
                      <img src="http://lorempixel.com/200/200/sports/Dummy-Text" alt="Imagen de perfil">
                      <br><br>
                      <button class="btn btn-outline-light" type="file">Cambiar foto</button>
                  </div>
              </div>

          </div>
      </div>
      <?php include_once('footer.php') ;?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
