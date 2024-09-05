<?php
// Habilitar soporte para imágenes destacadas y otras características básicas del tema
add_theme_support('post-thumbnails');
add_theme_support('title-tag');


// Agregar opciones al Personalizador
function mp_customize_register($wp_customize) {
    // Sección de colores globales
    $wp_customize->add_section('mp_global_colors_section', array(
        'title' => __('Colores Globales', 'mp_theme'),
        'priority' => 20,
    ));

    // Colores principales
    $wp_customize->add_setting('mp_color_primary', array(
        'default' => '#3498db',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mp_color_primary', array(
        'label' => __('Color Primario', 'mp_theme'),
        'section' => 'mp_global_colors_section',
    )));

    $wp_customize->add_setting('mp_color_secondary', array(
        'default' => '#2ecc71',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mp_color_secondary', array(
        'label' => __('Color Secundario', 'mp_theme'),
        'section' => 'mp_global_colors_section',
    )));

    // Sección de fuentes globales
    $wp_customize->add_section('mp_global_fonts_section', array(
        'title' => __('Tipografía Global', 'mp_theme'),
        'priority' => 30,
    ));

    // Selección de la fuente principal
    $wp_customize->add_setting('mp_font_primary', array(
        'default' => 'Arial, sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mp_font_primary', array(
        'label' => __('Fuente Principal', 'mp_theme'),
        'section' => 'mp_global_fonts_section',
        'type' => 'select',
        'choices' => array(
            'Arial, sans-serif' => 'Arial',
            '"Times New Roman", serif' => 'Times New Roman',
            '"Courier New", monospace' => 'Courier New',
            '"Helvetica", sans-serif' => 'Helvetica',
            '"Georgia", serif' => 'Georgia',
        ),
    ));

    // Sección para la configuración de la página principal
    $wp_customize->add_section('mp_home_section', array(
        'title'    => __('Página Principal', 'mp_theme'),
        'priority' => 40,
    ));

    // Título de la columna izquierda
    $wp_customize->add_setting('left_column_title', array(
        'default'           => 'Título por defecto',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('left_column_title', array(
        'label'    => __('Título de la Columna Izquierda', 'mp_theme'),
        'section'  => 'mp_home_section',
        'type'     => 'text',
    ));

    // Texto de la columna derecha
    $wp_customize->add_setting('right_column_text', array(
        'default'           => 'Texto por defecto',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('right_column_text', array(
        'label'    => __('Texto de la Columna Derecha', 'mp_theme'),
        'section'  => 'mp_home_section',
        'type'     => 'textarea',
    ));

    // Texto del botón
    $wp_customize->add_setting('right_column_button_text', array(
        'default'           => 'Botón por defecto',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('right_column_button_text', array(
        'label'    => __('Texto del Botón', 'mp_theme'),
        'section'  => 'mp_home_section',
        'type'     => 'text',
    ));

    // Enlace del botón
    $wp_customize->add_setting('right_column_button_link', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('right_column_button_link', array(
        'label'    => __('Enlace del Botón', 'mp_theme'),
        'section'  => 'mp_home_section',
        'type'     => 'url',
    ));
}
add_action('customize_register', 'mp_customize_register');

// Encolar estilos y scripts
function mp_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());

    // Aplicar los colores y la tipografía globales
    $color_primary = get_theme_mod('mp_color_primary', '#3498db');
    $color_secondary = get_theme_mod('mp_color_secondary', '#2ecc71');
    $font_primary = get_theme_mod('mp_font_primary', 'Arial, sans-serif');

    // Estilos dinámicos generados a partir de los valores personalizados
    $custom_css = "
        body {
            font-family: {$font_primary};
        }

        a, button, .btn {
            background-color: {$color_primary};
        }

        h1, h2, h3, h4, h5, h6 {
            color: {$color_secondary};
        }
    ";
    wp_add_inline_style('style', $custom_css);
}
add_action('wp_enqueue_scripts', 'mp_enqueue_styles');


// Encolar estilos y scripts
function mp_enqueue_scripts() {
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('mp-custom-js', get_template_directory_uri() . '/js/carrusel.js', array('jquery', 'slick-js'), null, true);
}
add_action('wp_enqueue_scripts', 'mp_enqueue_scripts'); 

function mi_tema_scripts() {
    // Registrar el archivo JS
    wp_enqueue_script('menu-script', get_template_directory_uri() . '/js/menu.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mi_tema_scripts');

?>
