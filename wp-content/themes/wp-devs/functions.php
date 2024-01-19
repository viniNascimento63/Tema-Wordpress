<?php

function wpdevs_load_scripts() {

    /* --- CARREGANDO FOLHAS DE ESTILOS --- */

    /*
     * 1° arg - nome do arquivo css
     * 2° arg - caminho da folha de estilo
     * 3° arg - indicando dependências de outras folhas de estilo.
     * Se tiver, escrever na ordem o nome da folha dentro de array().
     * 4° arg (opcional) - indica versão da folha de estilos.
     * 5° arg - tipo mídia a qual a folha de estilos foi definida.
     */
    wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory().'/style.css' ), 'all');
    // Usar a função filemtime() somente durante o desenvolvimento.

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);

    /* --- CARREGANDO SCRIPTS --- */

    wp_enqueue_script( 'dropdown', get_template_directory_uri().'/js/dropdown.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );

/* --- MENUS --- */
register_nav_menus(
    array(
        'wp_devs_main_menu' => 'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu'
    )
);
