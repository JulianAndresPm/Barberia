<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width-device-width">
        <title>Barber Shop </title>
        <link rel="stylesheet" href="reset.css">

        <link href="{{ asset('css\style-barber.css') }}" rel="stylesheet">
        <link href="{{ asset('css\style-productos.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    </head>

    <body>
        <section id="section-superior">
        <header>
                <div class="caja">
                    <h1 id="img-logo">
                        <img src="{{ url('/assets/img/logo-barberia.png') }}" alt="logo-primario" class="img">
                    </h1>
    <nav class="navbar navbar-expand-lg navbar-light" id="nav">
  <a class="navbar-brand"  href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contactos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Formulario</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
            </div>
            </nav>
        </div>
    </header>
</section>

<br>
<main>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ url('/assets/img/gel-afeitar.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Gel de Afeitar Elegant</h5>
    <h5 class="card-title">$22.500</h5>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ url('/assets/img/gel-afeitar2.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Gel de Afeitar Elegant</h5>
    <h5 class="card-title">$22.500</h5>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ url('/assets/img/cera.jpeg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Cera para cabello</h5>
    <h5 class="card-title">$25.500</h5>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ url('/assets/img/tinted.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Gel</h5>
    <h5 class="card-title">$25.500</h5>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>


</main>
<br>
<section id="section-baja">
                <footer>
                    <p id="pie-pag"> &copy Julian Paz & Luis Rosero - 2023</p>
                </footer>
        </section>
</body>
</html>
