<nav class="navbar navbar-expand-lg bg-primary bg-opacity-50 border-info" >
  <div class="container-fluid">
    <a class="navbar-brand" href="inicio" style="color: yellow; font-family: fantasy;">Anime</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="papular" style="color: mediumturquoise;">Papulares</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="envivo" style="color: mediumturquoise;">En trasmicion</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="genero" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: mediumturquoise;">
          Genero
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="shonen">Shonen</a></li>
            <li><a class="dropdown-item" href="isekai">Isekai</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="genero">Todos</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Anime" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>