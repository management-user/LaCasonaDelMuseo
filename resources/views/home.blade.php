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
                <a class="logo-link" href="/index.html">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="main-logo">
                    <p class="Logo-text">La Casona Del Museo</p>
                </a>

                <div class="spacer"></div>

                <ul class="principal-menu">
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
        </header>

    <main id="main">
        <h3 class="secondary-title">Memorias Coloniales</h3> 
        <h1>Donde la Historia Vive</h1>
        <p class="main-text">Bienvenidos a cultura muisca y café, los invitamos a ir a nuestra nueva dirección. Espero que les guste nuestra artesania.</p>

        <nav class="navigation-links">
            <ul>
                <li><a href="#galeria">Inicio</a></li>
                <li><a href="#historia">Nuestra Historia</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#ubicacion">Ubicación</a></li>
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
            <a href="#first-main" class="more-images-button">Más Imágenes</a>
        </div>
    </section>
    
    <!--Start third section-->
    <section class="third" id="historia">
        <div class="history-boxes"> 
            <div class="history-box tall-box" style="--bg-color: 240, 240, 240;">
                <img src="{{ asset('images/crafts-bags.jpg') }}" alt="Tejidos y Mochilas Artesanales"> 
                <div class="box-text">
                    <h3>El Arte del Tejido y Color</h3>
                    <p>La cuna de nuestras mochilas y textiles. Usamos fibras naturales y tintes vegetales para crear patrones vibrantes que narran la cosmovisión de las comunidades indígenas.</p>
                </div>
            </div>

            <div class="history-box medium-box" style="--bg-color: 150, 111, 214;">
                <img src="{{ asset('images/cafe-social-ambiance.jpg') }}" alt="Ambiente de Café y Tertulia">
                <div class="box-text">
                    <h3>La Experiencia de la Casona</h3>
                    <p>Un espacio que invita a la tertulia y el descanso. Disfrute de nuestra atmósfera colonial mientras degusta su café, rodeado de arte y tranquilidad.</p>
                </div>
            </div>

            <div class="history-box short-box" style="--bg-color: 224, 176, 96;">
                <img src="{{ asset('images/crafts-details.jpg') }}" alt="Detalles de Joyería">
                <div class="box-text">
                    <h3>La Filigrana en Oro y Plata</h3>
                    <p>Una mirada cercana a nuestras joyas artesanales. Cada pieza de filigrana es meticulosamente elaborada, capturando la elegancia colonial en diseños contemporáneos.</p>
                </div>
            </div>

            <div class="history-box short-box" style="--bg-color: 139, 69, 19;">
                <img src="{{ asset('images/coffee-harvest.jpg') }}" alt="Cosecha de Granos de Café">
                <div class="box-text">
                    <h3>Del Grano a la Taza Perfecta</h3>
                    <p>Seleccionamos solo el mejor café de origen colombiano. Con un tostado artesanal, garantizamos un cuerpo exquisito y un aroma que evoca nuestras montañas.</p>
                </div>
            </div>

            <div class="history-box medium-box" style="--bg-color: 100, 100, 100;">
                <img src="{{ asset('images/crafts-jewelry.jpg') }}" alt="Orfebrería y Joyería de Diseño">
                <div class="box-text">
                    <h3>Orfebrería Inspirada en Muisca</h3>
                    <p>Nuestra colección de pequeños tesoros inspirados en la orfebrería precolombina. Utilizamos metales nobles para rendir homenaje a la riqueza cultural Muisca.</p>
                </div>
            </div>
            
            <div class="history-box medium-box" style="--bg-color: 10, 10, 10;">
                <img src="{{ asset('images/cafe-serving.jpg') }}" alt="Objetos Únicos de Decoración">
                <div class="box-text">
                    <h3>Objetos Únicos de Decoración</h3>
                    <p>Nuestros objetos decorativos y utilitarios son la fusión de arte y funcionalidad. Desde cerámica hasta tallas en madera, cada artículo embellece su hogar.</p>
                </div>
            </div>
            
            <div class="history-box shortest-box" style="--bg-color: 50, 50, 50;">
                <img src="{{ asset('images/cafe-interior-view.jpg') }}" alt="Vista Interior de la Casona">
                <div class="box-text">
                    <h3>Arquitectura Colonial</h3>
                    <p>La belleza de nuestra arquitectura complementa el arte que exhibimos. Muros antiguos y vigas de madera crean un telón de fondo histórico y acogedor.</p>
                </div>
            </div>

        </div>
    </section>

    <footer></footer>
</body>
</html>