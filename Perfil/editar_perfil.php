<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/perfil.css">
    <title>Usuario</title>
  </head>
  <body class="bg-dark">
      <div class="container">
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
                      <a class="dropdown-item text-secondary" href="#preguntas">De qué se trata todo esto</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-secondary" href="#tracks">Tracks del Mes</a>
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
          </header>
          <br><br><br><br>
          <div class="lPerfil bg-dark text-light">
          <h1 class="text-center">Mi perfil</h1>
          <form class="lPerfil text-center" action="Usuario.php" method="POST">
              <label for="nombre">Tu nombre: </label>
              <input type="text" name="nombre" value="">
              <br>
              <label for="apellido">Tu apellido: </label>
              <input type="text" name="apellido" value="">
              <br>
              <label for="email">Tu email: </label>
              <input type="email" name="email" value="">
              <br>
              <label for="telefono">Tu teléfono: </label>
              <input type="numeric" name="telefono" value="">
              <br>
              <label for="web">Tu página: </label>
              <input type="url" name="web" value="">
              <br>
              <label for="youtube">Tu canal de Youtube: </label>
              <input type="url" name="youtube" value="">
              <br>
              <input type="submit" name="" value="Editar">
          </form>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
