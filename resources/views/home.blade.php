<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>La Casona del Museo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!--Start first section-->
    <section class="first" id="first-main">
        <header>
            <nav class="navigation-bar">
                <a class="logo-link" href="{{ url('/home') }}">
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

    <main id="main">
        <h3 class="secondary-title">Memorias Coloniales</h3> 
        <h1>Donde la Historia Vive</h1>
        <p class="main-text">Bienvenidos a una muestra de cultura multicultural y café, los invitamos a ir a nuestra nueva dirección. Espero que les guste nuestra artesania.</p>

        <nav class="navigation-links">
            <ul>
                <li><a href="#galeria">Inicio</a></li>
                <li><a href="#historia">Nuestra Historia</a></li>
                <li><a href="#reseñas">Reseñas</a></li>
                <li><a href="#ubicacion">Ubicación</a></li>
                <li><a href="">Hombres de Barro</a></li>
            </ul>
        </nav>
    </main>
    
        <section class="video-section" id="videoSection">
            <video autoplay loop muted playsinline poster="{{ asset('images/video-poster.jpg') }}" class="full-width-video">
                <source src="{{ asset('videos/Cover_Final.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section>
    </section>

    <!--Start second section-->
    <section class="second" id="galeria">

        <div class="section-intro">
            <p>Muestras vivas de la cultura Muisca y la tradición cafetera de nuestra Casona.</p>
        </div>

        <div class="image-grid"> 
            <div class="image-box">
            <img src="{{ asset('images/crafts-1.jpg') }}" alt="Crafted bags">
            </div>
            <div class="image-box">
            <img src="{{ asset('images/emergency-exit.jpg') }}" alt="Mud men">
            </div>
            <div class="image-box">
            <img src="{{ asset('images/golden-pieces.jpg') }}" alt="Artesanía 3">
            </div>
            <div class="image-box">
            <img src="{{ asset('images/premium-mud-piece.jpg') }}" alt="Artesanía 4">
            </div>     
        </div>

        <div class="button-container">
            <a href="https://hombresdebarro.com" target="_blank" rel="noopener noreferrer" class="more-images-button">
                Catálogo de Hombres de Barro
            </a>
        </div>
    </section>
    
    <!--Start third section-->
    <section class="third" id="historia">
        <div class="history-boxes"> 
            <div class="history-box tall-box" style="--bg-color: 240, 240, 240;">
                <img src="{{ asset('images/crafts-2.jpg') }}" alt="Tejidos y Mochilas Artesanales"> 
                <div class="box-text">
                    <h3>El Arte del Tejido y Color</h3>
                    <p>La cuna de nuestras mochilas y textiles. Usamos fibras naturales y tintes vegetales para crear patrones vibrantes que narran la cosmovisión de las comunidades indígenas.</p>
                </div>
            </div>

            <div class="history-box medium-box" style="--bg-color: 150, 111, 214;">
                <img src="{{ asset('images/zone-2-full.jpg') }}" alt="Ambiente de Café y Tertulia">
                <div class="box-text">
                    <h3>La Experiencia de la Casona</h3>
                    <p>Un espacio que invita a la tertulia y el descanso. Disfrute de nuestra atmósfera colonial mientras degusta su café, rodeado de arte y tranquilidad.</p>
                </div>
            </div>

            <div class="history-box short-box" style="--bg-color: 224, 176, 96;">
                <img src="{{ asset('images/rings-zoomed-picture.jpg') }}" alt="Detalles de Joyería">
                <div class="box-text">
                    <h3>La Filigrana en Oro y Plata</h3>
                    <p>Una mirada cercana a nuestras joyas artesanales. Cada pieza de filigrana es meticulosamente elaborada, capturando la elegancia colonial en diseños contemporáneos.</p>
                </div>
            </div>

            <div class="history-box medium-box" style="--bg-color: 224, 200, 150;">
                <img src="{{ asset('images/jewelry-counter.jpg') }}" alt="Taller de Orfebrería">
                <div class="box-text">
                    <h3>La Mano del Orfebre</h3>
                    <p>Descubra la dedicación detrás del metal. Nuestros artesanos utilizan herramientas ancestrales y técnicas pulidas por el tiempo para dar vida a cada collar y anillo.</p>
                </div>
            </div>

            <div class="history-box short-box" style="--bg-color: 139, 69, 19;">
                <img src="{{ asset('images/coffe-cup.jpg') }}" alt="Cosecha de Granos de Café">
                <div class="box-text">
                    <h3>Del Grano a la Taza Perfecta</h3>
                    <p>Seleccionamos solo el mejor café de origen colombiano. Con un tostado artesanal, garantizamos un cuerpo exquisito y un aroma que evoca nuestras montañas.</p>
                </div>
            </div>

            <div class="history-box medium-box" style="--bg-color: 100, 100, 100;">
                <img src="{{ asset('images/mud-pieces-2.jpg') }}" alt="alfareria y Joyería de Diseño">
                <div class="box-text">
                    <h3>Alfareria Inspirada en Muisca</h3>
                    <p>Nuestra colección de pequeños tesoros inspirados en la alfareria precolombina. Utilizamos metales nobles para rendir homenaje a la riqueza cultural Muisca.</p>
                </div>
            </div>
            
            <div class="history-box medium-box" style="--bg-color: 10, 10, 10;">
                <img src="{{ asset('images/second-floor-perspective-zone-1.jpg') }}" alt="Objetos Únicos de Decoración">
                <div class="box-text">
                    <h3>Objetos Únicos de Decoración</h3>
                    <p>Nuestros objetos decorativos y utilitarios son la fusión de arte y funcionalidad. Desde hombres de barro hasta tejidos artesanales, cada artículo embellece su hogar.</p>
                </div>
            </div>
            
            <div class="history-box shortest-box" style="--bg-color: 50, 50, 50;">
                <img src="{{ asset('images/full-entrance-blue-yellow.jpg') }}" alt="Vista Interior de la Casona">
                <div class="box-text">
                    <h3>Arquitectura Colonial</h3>
                    <p>La belleza de nuestra arquitectura complementa el arte que exhibimos. Muros antiguos y vigas de madera crean un telón de fondo histórico y acogedor.</p>
                </div>
            </div>

            <div class="history-box medium-box" style="--bg-color: 173, 117, 98;">
                <img src="{{ asset('images/mud-faces-counter-entrance.jpg') }}" alt="Esculturas en Cerámica y Barro">
                <div class="box-text">
                    <h3>Hombres de Barro</h3>
                    <p>Un tributo a la cerámica precolombina. Moldeamos la arcilla para crear figuras que honran las tradiciones muiscas, manteniendo vivo el arte ancestral del modelado.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Reviews Section -->

    

    <section class="fourth" id="reseñas">

        <section class="reviews-intro">
            <div class="text-center mb-5">
                <h2 class="section-title">La Casona del Museo</h2>
                    <p class="lead text-muted px-4">
                    En el corazón de Bogotá, donde las calles guardan historias y los muros respiran arte, 
                    se levanta <strong>La Casona del Museo</strong> — un rincón de tradición, belleza y alma.  
                    Entre sus pasillos se entrelazan los colores de la artesanía, el brillo de las esmeraldas 
                    y la calidez de quienes hacen de cada visita una experiencia inolvidable.  
                    Aquí, cada objeto tiene una historia y cada sonrisa deja una huella.
                    </p>
            </div>
        </section>

        <div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            
            <!-- Inner Slides -->
            <div class="carousel-inner">

            <!-- Review 1 -->
            <div class="carousel-item active text-center">
                <img src="{{ asset('images/caption-1.jpg') }}" class="rounded-circle mb-3" alt="Cliente 1">
                <p class="text-muted review-text">“La experiencia fue increíble. Todo estuvo perfectamente organizado. Esta casona luce muy pintoresca y se encuentra a un costado del museo del oro, aquí puedes adquirir artesanías y recuerdos. He estado en otras ocasiones pero ahora sólo pude admirar su fachada, ya estaba cerrada.”</p>
            </div>

            <!-- Review 2 -->
            <div class="carousel-item text-center">
                <img src="{{ asset('images/caption-2.jpg') }}" class="rounded-circle mb-3" alt="Cliente 2">
                <p class="text-muted review-text">“Gemma Andina. Compré con ellos unos anillos y una cadena, buen servicio, buena calidad, me certificaron los productos. Además, el señor que atiende tiene unas artesanías que me parecieron bonitas.”</p>
            </div>

            <!-- Review 3 -->
            <div class="carousel-item text-center">
                <img src="{{ asset('images/caption-3.jpg') }}" class="rounded-circle mb-3" alt="Cliente 3">
                <p class="text-muted review-text">“Un espacio para comprar artesanías en pleno centro de Bogotá, tranquilo, seguro y con excelente café. ¡Qué más se puede pedir para descansar un poco antes de seguir caminando por el centro de Bogotá! Recomendado.”</p>
            </div>

            <!-- Review 4 -->
            <div class="carousel-item text-center">
                <img src="{{ asset('images/caption-4.jpg') }}" class="rounded-circle mb-3" alt="Cliente 4">
                <p class="text-muted review-text">“Una joyería dentro de la casona, excelentes esmeraldas. La atención especializada y la paciencia de ellos la hace especial. ¡Te arman tu diseño, te escuchan, muy buena onda! 100% recomendable. ¡Volveré!”</p>
            </div>

            <!-- Review 5 -->
            <div class="carousel-item text-center">
                <img src="{{ asset('images/caption-5.jpg') }}" class="rounded-circle mb-3" alt="Cliente 5">
                <p class="text-muted review-text">“Cuando sales del museo del oro, cansado o con hambre, tienes enfrente esta pequeña galería comercial ubicada en una bonita casa colonial declarada Bien Cultural. En el patio puedes tomar un café o una comida ligera para reponer fuerzas, y el sitio resulta acogedor.”</p>
            </div>

            <!-- Review 6 -->
            <div class="carousel-item text-center">
                <img src="{{ asset('images/caption-6.jpg') }}" class="rounded-circle mb-3" alt="Cliente 6">
                <p class="text-muted review-text">“Lindas tiendas con artesanía y mercadería típica. Venden desde esmeraldas a llaveros, pasando por réplicas del Museo del Oro o del Museo Botero. Hacia el lado derecho del café existe un pasaje que lleva a una zona de artesanías con buenos precios y trabajos muy bien hechos. Algunas tiendas aceptan tarjetas.”</p>
            </div>

            <!-- Review 7 -->
            <div class="carousel-item text-center">
                <img src="{{ asset('images/caption-7.jpg') }}" class="rounded-circle mb-3" alt="Cliente 7">
                <p class="text-muted review-text">“Excelente lugar, joyería con esmeraldas certificadas y artesanías a buen precio. Diferencia y exclusividad. Esmeraldas colombianas por sus características son únicas: más brillantes, puras y resistentes.”</p>
            </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#reviewCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>

        </div>
    </section>

    <!-- Start Fifth Section -->
    <section class="fifth" id="ubicacion">
        <div class="container text-center py-5">
            <h2 class="section-title mb-4">Ubicación</h2>
            <p class="lead text-white mb-5">
            La Casona del Museo se encuentra en el corazón histórico de Bogotá, justo frente al Museo del Oro.  
            Un punto de encuentro entre la historia, el arte y la tradición, donde cada paso te acerca al alma cultural de la ciudad.
            </p>

            <!-- Google Map -->
            <div class="map-container mx-auto" style="max-width: 900px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.9636869652472!2d-74.07219296913688!3d4.600527059261816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99a1522d9bbb%3A0x1c9f594a8c8e4c3c!2sCentro%20Comercial%20la%20Casona%20del%20Museo!5e0!3m2!1sen!2sco!4v1759333665103!5m2!1sen!2sco" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

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