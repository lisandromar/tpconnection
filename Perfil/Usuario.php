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
  <body>
      <div class="bg-dark">
          <div class="container text-light">
             <header class="fixed-top">
                  <nav class="navbar navbar-expand-lg navbar-light bg-dark "  >
                      <a class="navbar-brand text-secondary " href="../index.php">Connection</a>
                      <div class="collapse navbar-collapse " id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto  ">
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle  text-secondary" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Muro</a>
                                <div class="dropdown-menu bg-dark text-secondary" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-secondary" href="editar_perfil.php">Editar mi perfil</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="posteos_y_amigos.php">Comunidad</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  text-secondary" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Preguntas</a>
                                <div class="dropdown-menu bg-dark text-secondary" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-secondary" href="#preguntas">De qué se trata todo esto</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-secondary" href="#tracks">Tracks del Mes</a>>
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
                                <button class="btn btn-outline-light my-2 my-sm-0 botonLogin" type="submit"><a href="../formularios/formularioLogin.html">Login</a></button>
                            </form>
                        </div>
                    </nav>
              </header>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
