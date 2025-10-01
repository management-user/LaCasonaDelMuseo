<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Preguntas Frecuentes - La Casona del Museo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body style="background-color: #000; color: white;">

    <!-- NAVBAR -->
    <header>
        <nav class="navigation-bar">
            <a class="logo-link" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="main-logo">
                <p class="Logo-text">La Casona Del Museo</p>
            </a>

            <div class="spacer"></div>

            <ul class="principal-menu">
                <li><a href="{{ url('/contact') }}">Contacto</a></li>
                <li><a href="{{ url('/') }}">Inicio</a></li>
            </ul>
        </nav>
    </header>

    <!-- FAQ SECTION -->
    <section class="faq py-5 text-center">
        <div class="container">
            <h2 class="mb-5 text-white">Preguntas Frecuentes</h2>

            <div class="accordion" id="faqAccordion">
                <div class="accordion-item bg-dark text-white border-0 mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            ¿Dónde se encuentra La Casona del Museo?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-start">
                            Nos encuentras en Carrera 5 # 16-43, junto al parqueadero del Museo del Oro, en el corazón de Bogotá.
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-dark text-white border-0 mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            ¿Qué tipo de productos ofrecen?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-start">
                            Ofrecemos artesanías, joyas con esmeraldas y piezas únicas que representan la riqueza cultural de Colombia.
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-dark text-white border-0 mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            ¿Hacen envíos nacionales o internacionales?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-start">
                            Preferimos que nos permitas tenerte en nuestras instalaciones, de esta manera la experiencia sera inolvidable tanto para ti como para nosotros.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="text-center py-4" style="background-color: #111; color: white;">
        <p class="mb-1">Carrera 5 # 16-43 (JUNTO AL PARQUEADERO DEL MUSEO DEL ORO)</p>
        <p class="mb-1">Teléfonos: (57) 310 8754128 | (57-1) 2 439 628</p>
        <p class="mb-1">E-Mail: <a href="mailto:lacasonadelmuseo@yahoo.com" style="color: #fff; text-decoration: none;">lacasonadelmuseo@yahoo.com</a></p>
        <p class="mb-1">Horario: Lunes a sábado de 9 am a 7 pm | Domingos de 10 am a 5 pm</p>
        <p class="mb-0">Bogotá - Colombia</p>
    </footer>

    <script src="{{ asset('js/script-reveal.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
