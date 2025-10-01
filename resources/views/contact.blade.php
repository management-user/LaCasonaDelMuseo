<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | La Casona del Museo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body style="background-color: #111; color: white;">

    <!-- Header / Navbar -->
        <header>
            <nav class="navigation-bar">
                <a class="logo-link" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="main-logo">
                    <p class="Logo-text">La Casona Del Museo</p>
                </a>

                <div class="spacer"></div>

                <ul class="principal-menu">
                    <li><a href="{{ route('contact') }}">Contacto</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                </ul>
            </nav>
        </header>

    <!-- Contact Section -->
    <section class="container py-5">
      <h1 class="mb-4 text-center">Contáctanos</h1>
        <p class="lead text-center mb-5">
            Si tienes alguna pregunta o deseas conocer más sobre nuestros productos, no dudes en escribirnos.  
            En <strong>La Casona del Museo</strong> valoramos cada mensaje y te responderemos lo antes posible.
        </p>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class="p-4 rounded" style="background-color: #222;">
                    <div class="mb-3 text-start">
                        <label for="name" class="form-label text-white">Nombre</label>
                        <input type="text" class="form-control bg-dark text-white border-secondary" id="name" placeholder="Tu nombre completo">
                    </div>

                    <div class="mb-3 text-start">
                        <label for="email" class="form-label text-white">Correo Electrónico</label>
                        <input type="email" class="form-control bg-dark text-white border-secondary" id="email" placeholder="nombre@ejemplo.com">
                    </div>

                    <div class="mb-3 text-start">
                        <label for="message" class="form-label text-white">Mensaje</label>
                        <textarea class="form-control bg-dark text-white border-secondary" id="message" rows="5" placeholder="Escribe tu mensaje aquí..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-light px-5">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4" style="background-color: #000;">
        <p class="mb-1">Carrera 5 # 16-43 (JUNTO AL PARQUEADERO DEL MUSEO DEL ORO)</p>
        <p class="mb-1">Teléfonos: (57) 310 8754128 | (57-1) 2 439 628</p>
        <p class="mb-1">E-Mail: 
            <a href="mailto:lacasonadelmuseo@yahoo.com" style="color: #fff; text-decoration: none;">
                lacasonadelmuseo@yahoo.com
            </a>
        </p>
        <p class="mb-1">Horario: Lunes a sábado de 9 am a 7 pm | Domingos de 10 am a 5 pm</p>
        <p class="mb-0">Bogotá - Colombia</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
