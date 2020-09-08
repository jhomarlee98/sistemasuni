<header>
  <div class="d-none d-md-flex justify-content-around align-content-center align-items-center ">
    <div class="col-md-1 col-12 text-center">
      <img class="logo logo-uni" src="{{ asset('images/logouni.png') }}" alt="logo universidad nacional de ingenieria color granate fondo transparente">
    </div>
    <div class="col-md-9 col-12 text-center d-sm-none d-md-none d-lg-block">
      <h2 class="text-uni text-center color-granate">UNIVERSIDAD NACIONAL DE INGENIERIA</h2>
      <h3 class="text-fac text-center color-institucional">FACULTAD DE INGENIERIA INDUSTRIAL Y DE SISTEMAS</h3>
    </div>
    <div class="col-md-2 col-12 text-center">
      <img class="logo logo-sistemasuni" src="{{ asset('images/logo-sistemasuni.png') }}">
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-institucional">
    <a class="navbar-brand col-md-2 col-12 text-center" href="{{asset('')}}">
      <img class="logo-menu" src="{{ asset('images/menu-logo.png') }} " alt="logo sin computadora blanco" >
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="horariosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Horarios<span class="sr-only">(current)</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="horariosDropdown">
            <a class="dropdown-item" href="#">Sede Central</a>
            <a class="dropdown-item" href="#">Sede San Borja</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Eventos</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="horariosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Certificaciones
          </a>
          <div class="dropdown-menu" aria-labelledby="horariosDropdown">
            <a class="dropdown-item" href="#">PERSON VUE (Centro Autorizado)</a>
            <a class="dropdown-item" href="#">Informatica educativa</a>
            <a class="dropdown-item" href="#">Capacitación a empresas</a>
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Talleres</a>
        </li>
      </ul>
        <input class="mr-sm-2" type="nameCurso" placeholder="Nombre del curso" aria-label="Search" required="true">
        <button class="btn btn-outline-info my-2 my-sm-0" data-toggle="modal" data-target="#cursoHorario">Buscar</button>
      <div class="col-lg-3 col-md-4 col-12 text-center icon-social">
        @include('widgets.social')
      </div>
    </div>
  </nav>
</header>