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

        <section id="section-media">
            <main>
                <div id="lema">
                    <strong>Proporcionar autoestima y calidad de vida a nuestros clientess</strong>
                </div>
                <div class="quienes-somos">
                    <h2>¿Quienes Somos?</h2>
                    <p>
                        Profesionales experimentados que están constantemente observando los cambios y movimiento en el mundo de la moda,<br>
                        para así ofrecer a nuestros clientes las últimas tendencias. El atendimiento posee un padrón de excelencia y agilidad,<br>
                        garantizando calidad y satisfacción de nuestros clientes.
                    </p>
                </div>
                <div class="historia">
                    <h2>Historia</h2>
                    <p>Fundada en 2020, la Barbería BARBER-SHOP de la mano de nuestro fundador Julian Paz <br>
                        ya es destaque en la ciudad y conquista nuevos clientes diariamente</p>
                </div>
                <div class="ubicacion">
                    <h2>Ubicacion</h2>
                    <p>Ubicada en el corazón de la ciudad, la Barbería Alura trae para el mercado lo que hay de mejor para su cabello y barba.</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5389.1301507542!2d-77.28007427865447!3d1.2137167915575184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed484426af2c3%3A0x39d9b8e78f064523!2sCra.%2024%20%26%20Cl.%2017%2C%20Pasto%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1674676245269!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mapa"></iframe>
                </div>
            </main>
        </section>
        <section id="section-baja">
                <footer>
                    <p id="pie-pag"> &copy Julian Paz & Luis Rosero - 2023</p>
                </footer>
        </section>
    </body>
</html>
