<?php
require_once("controladores/funciones.php");
require_once("helpers.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="css/JMO.css">
    <link rel="stylesheet" href="animate.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Lato:100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../animate.css-master\animate.css">

  </head>
  <body>
    <div class="bg-dark" >
    <div class="jmo_container">

      <?php include_once('header.php');?>
      <br>
      <br>
      <div class="marco">
        <fieldset>
          <legend class="jmo_titulo">Contactanos</legend>
          <form action="" method="post">
            <p>
              <label for="Nombre y Apellido">Nombre y Apellido:</label>
              <br>
              <input type="text" id="Nombre y Apellido" name="Nombre y Apellido" value="" required placeholder="Indique su Nombre y Apellido">
            </p>
            <br>
            <p>
              <label for="Teléfono">Teléfono:</label>
              <br>
              <input type="text" id="Teléfono" name="Teléfono" value="" placeholder="Teléfono">
            </p>
            <br>
            <p>
              <label for="email">Email:</label>
              <br>
              <input type="email" id="email" name="email" value="" required placeholder="Indique su email">
            </p>
            <br>
            <p>
              <label for="Fecha">Fecha:</label>
              <br>
              <input type="date" id="fecha" name="fecha" value="">
            </p>
            <br>
            <p>
              <textarea name="Comentario" rows="8" cols="80" required placeholder="Deja un comentario"></textarea>
            </p>
            <br>
            <p class="Boton animated">
              <button class="btn btn-outline-light my-2 my-sm-0 botonLogin" type="submit">Enviar</button>
              <button class="btn btn-outline-light my-2 my-sm-0 botonLogin" type="submit">Borrar</button>
            </p>
          </form>
        </fieldset>
      </div>
    </div>
    <?php include_once ('footer.php') ;?>
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
  </body>
</html>
