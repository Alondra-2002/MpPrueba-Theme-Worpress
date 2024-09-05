<footer>
    <div class="footer-widgets">
        <!-- Columna 1: Logo -->
        <div class="footer-column">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" class="logo" style="max-width: 250px;">
        </div>
        
        <!-- Columna 2: Ubicación -->
        <div class="footer-column">
            <div class="footer-location">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ubicacion.png" alt="ubicacion" class="ubicacion">     
                <i class="fas fa-map-marker-alt"></i>
                <p> Km. 16.5 Carretera a El Salvador,
                    Carretera a San José Pinula, 0-04, zona 0,
                    Aldea Don Justo, Santa Catarina Pinula,
                    Guatemala</p>
            </div>
        </div>
        
        <!-- Columna 3: Contacto -->
        <div class="footer-column">
            <div class="footer-contact">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/telefono.png" alt="telefono" class="telefono">     
                    <i class="fas fa-phone"></i>
                    <span>2278-2020</span>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/correo.png" alt="correo" class="correo">     
                    <i class="fas fa-envelope"></i>
                    <span>info@expande.gt</span>
                </div>
            </div>
        </div>
        
        <!-- Columna 4: Redes Sociales -->
        <div class="footer-column">
            <div class="footer-social">
            <a href="https://www.instagram.com/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/insta.png" alt="insta" class="insta">  
            <a href="https://www.facebook.com/" target="_blank">   
            <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="face" class="face">     
            </div>
        </div>
    </div>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    <?php wp_footer(); ?>
</footer>



