<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body <?php body_class(); ?>>

<div class="social-icons-fixed">
    <a href="https://wa.me/your-number" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" alt="WhatsApp" class="social-icon">
    </a>
    <a href="https://www.facebook.com/your-page" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/facebook1.png" alt="Facebook" class="social-icon">
    </a>
    <a href="https://www.instagram.com/your-page" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/instagram1.png" alt="Instagram" class="social-icon">
    </a>
</div>

    <header>
    <div class="menu-container">
    <button class="menu-button" onclick="toggleMenu()">☰</button>
    <div class="dropdown-menu">
        <a href="#inicio">Inicio</a>
        <a href="#nosotros">Nosotros</a>
        <a href="#tipos-inversion">Tipos de Inversión</a>
        <a href="#proyectos">Proyectos para Invertir</a>
        <a href="#blog">Blog</a>
        <a href="#contacto">Contacto</a>
        <div class="social-icons">
        <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" alt="whatsapp" class="whatsapp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/facebook1.png" alt="Facebook" class="Facebook">
        <img src="<?php echo get_template_directory_uri(); ?>/img/instagram1.png" alt="Instagram" class="Instagram">
        </div>
    </div>
</div>

        <div id="inicio" class="contenido carrusel">
            <div class="carousel">
                <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/carrusel1.jpg');">
                    <div class="carousel-content">
                        <h2 class="carousel-title">Somos el primer modelo de inversión inmobiliaria fraccionada</h2>
                        <p class="carousel-text">Invierte en fracciones de bienes inmuebles ajustadas a tu capacidad financiera y recibe los mejores rendimientos</p>
                        <a href="#" class="carousel-button">Agendar una cita</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/carrusel2.jpg');">
                    <div class="carousel-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fractional.png" alt="plus">
                        <h2 class="carousel-title">La manera más sencilla de expandir tu patrimonio a través de CPIs</h2>
                        <a href="#" class="carousel-button">Agendar una cita</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/carrusel3.jpg');">
                    <div class="carousel-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plus.png" alt="Icono 1">
                        <h2 class="carousel-title">Una inversión personalizada para comprar de forma individual o en grupo</h2>
                        <a href="#" class="carousel-button">Agendar una cita</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/carrusel4.jpg');">
                    <div class="carousel-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partner.png" alt="Icono 1">
                        <h2 class="carousel-title">Sé parte de un exclusivo club de inversión inmobiliaria</h2>
                        <a href="#" class="carousel-button">Agendar una cita</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>
</html>
