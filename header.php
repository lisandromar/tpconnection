<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark "  >
      <a class="navbar-brand text-secondary " href="index.php">Connection</a>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto  ">
          <li class="nav-item">
            <a class="nav-link  text-secondary" href="Usuario.php">Muro</a>
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
              <a class="dropdown-item text-secondary" href="#tracks">Tracks del Mes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-secondary" href="#">Lugares</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="formularioContacto.php">Contacto</a>
          </li>
        </ul>
        
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 bg-dark" type="search" placeholder="Buscar contenido" aria-label="Search">
            <?php if(!isset($_SESSION["email"])) : ?>
            <button class="btn btn-outline-light my-2 my-sm-0 botonLogin" type="submit"><a href="formularioLogin.php">Login</a></button>
          </form>
          <?php else :?>
          <form class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline-light my-2 my-sm-0 botonLogin" type="submit"><a href="logout.php">Logout</a></button>
          </form>
          <?php endif ?>
      </div>
    </nav>
  </header>