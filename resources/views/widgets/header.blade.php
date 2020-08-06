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
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cursos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Certificacion Intenacional</a>
            <a class="dropdown-item" href="#">Modulares</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <div class="col-lg-3 col-md-4 col-12 text-center icon-social">
        @include('widgets.social')
      </div>
    </div>
  </nav>
</header>