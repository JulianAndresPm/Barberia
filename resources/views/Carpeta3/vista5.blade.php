<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width-device-width">
        <title>Barber Shop </title>
        <link rel="stylesheet" href="reset.css">

        <link href="{{ asset('css\style-barber.css') }}" rel="stylesheet">
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
<div class="container mt-4">
  <form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
  </form>

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
