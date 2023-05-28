<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width-device-width">
        <title>Barber Shop </title>
        <link rel="stylesheet" href="reset.css">

        <link href="{{ asset('css\style-barber.css') }}" rel="stylesheet">
        <link href="{{ asset('css\contactos-barber.css') }}" rel="stylesheet">

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
    <form id="formulario">
    <div class="form-group">

        <label for="exampleFormControlInput1">Nombre y Apellidos</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">

        <label for="exampleFormControlInput1">Correo Electronico</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">

        <label for="exampleFormControlInput1">Telefono</label>
        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="">

    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">¿Como te gustaria que te contactemos?</label>
        <select class="form-control" id="exampleFormControlSelect1">
        <option>Whatsapp</option>
        <option>Correo Eletronico</option>
        <option>Telefono</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Mensaje</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    </form>
</main>
<br>
<section id="section-baja">
                <footer>
                    <p id="pie-pag"> &copy Julian Paz & Luis Rosero - 2023</p>
                </footer>
        </section>
</body>
</html>
