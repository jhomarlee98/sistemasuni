<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistemas-UNI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    </head>
    <body>
        <header>
            <div class="row justify-content-betweenn align-content-center">
                <div class="col-md-1 col-12 text-center">
                    <img class="logo logo-uni" src="{{ asset('images/logouni.png') }}">
                </div>
                <div class="col-md-9 col-12 text-center">
                    <h2 class="text-center color-granate">UNIVERSIDAD NACIONAL DE INGENIERIA</h2>
                    <h3 class="text-center color-institucional">FACULTAD DE INGENIERIA INDUSTRIAL Y DE SISTEMAS</h3>
                </div>
                <div class="col-md-2 col-12 text-center">
                    <img class="logo logo-sistemasuni" src="{{ asset('images/logo-sistemasuni.png') }}">
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-institucional">
               <a class="navbar-brand col-2" href="{{asset('')}}">SistemasUNI</a>
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
                </div>
            </nav>
        </header>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
