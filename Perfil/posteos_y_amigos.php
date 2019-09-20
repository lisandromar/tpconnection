<?php
    if ($_POST) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $pagina = $_POST['web'];
        $youtube = $_POST['youtube'];
    }
 ?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/perfil.css">
    <title>Posteos y amigos</title>
  </head>
  <body class="bg-dark">
      <div class="container bg-dark text-light">
          <header class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark "  >
              <a class="navbar-brand text-secondary " href="../index.php">Connection</a>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto  ">
                  <li class="nav-item">
                    <a class="nav-link  text-secondary" href="Usuario.php">Muro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-secondary" href="#">Comunidad</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  text-secondary" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Preguntas</a>
                    <div class="dropdown-menu bg-dark text-secondary" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item text-secondary" href="#">Agenda</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-secondary" href="#">Djs</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-secondary" href="#">Lugares</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-secondary" href="../formularios/formularioContacto.html">Contacto</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2 bg-dark" type="search" placeholder="Buscar contenido" aria-label="Search">
                  <button class="btn btn-outline-light my-2 my-sm-0 botonLogin" type="submit"><a href="formularios/formularioLogin.html">Login</a></button>
                </form>
              </div>
            </nav>
          </header> <br><br>
          <div class="amigos">
              <a class="nav-link dropdown-toggle  text-light text-center" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h2>Amigos</h2></a>
              <div class="dropdown-menu bg-dark text-secondary text-center" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-secondary" href="#">Amigo 1</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-secondary" href="#">Amigo 2</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-secondary" href="#">Amigo 3</a>
              </div>
          </div>
        <br><br><br>
          <div class="postear text-center">
              <fieldset>
                  <legend>Comparte tu música a tus amigos/as!</legend>
                  <form class="" action="" method="post" enctype="multipart/form-data">
                      <label for="postear">¿Que estas escuchando?</label>
                      <input type="file" name="postear" value="">
                  </form>
              </fieldset>
          </div>
          <br><br>
          <div class="posteos">
                <fieldset>
                    <legend class="text-center"><h2>Esto estan escuchando tus amigos:</h2></legend>
                </fieldset>
                    <p class="text-center">
                <legend>A <a href="#">Amigo 1</a> le gusto esta canción:</legend> <!-- al clickear en Amigo 1 deberia llevar al perfil de esa persona -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/W9P_qUnMaFg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </p>
                    <p class="text-center">
                <legend>A <a href="#">Amigo 2</a> le gusto esta canción:</legend> <!-- al clickear en Amigo 2 deberia llevar al perfil de esa persona -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/gl2p4G3CUrI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </p>
                    <p class="text-center">
                <legend>A <a href="#">Amigo 3</a> le gusto esta canción:</legend> <!-- al clickear en Amigo 3 deberia llevar al perfil de esa persona -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3WG0T2RU6tQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </p>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
