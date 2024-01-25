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


/* --- THEME SUPPORT ---*/

function wpdevs_config() {
    /* --- MENUS --- */
    register_nav_menus(
        array(
            'wp_devs_main_menu' => 'Main Menu',
            'wp_devs_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );

    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', 
        array(
		    'height'      => 110,
		    'width'       => 200,
            'flex-height' => true,
		    'flex-width' => true
        ) 
    );
}

add_action( 'after_setup_theme', 'wpdevs_config', 0 );

/* --- SIDEBARS (ÁREA DE WIDGETS) --- */
add_action( 'widgets_init', 'wpdevs_sidebars');
function wpdevs_sidebars() {
    register_sidebar(
        array(
            'name'=>'Blog Sidebar',
            'id'=>'sidebar-blog',
            'description'=>'This is the Blog Sidebar. You can add your widgets here.',
            'before_widget'=>'<div class="widget-wrapper">',
            'after_widget'=>'</div>',
            'before_title'=>'<h4 class="widget-title">',
            'after_title'=>'</h4>'
        )
    );
    register_sidebar(
        array(
            'name'=>'Service 1',
            'id'=>'services-1',
            'description'=>'First Service Area.',
            'before_widget'=>'<div class="widget-wrapper">',
            'after_widget'=>'</div>',
            'before_title'=>'<h4 class="widget-title">',
            'after_title'=>'</h4>'
        )
    );
    register_sidebar(
        array(
            'name'=>'Service 2',
            'id'=>'services-2',
            'description'=>'Second Service Area.',
            'before_widget'=>'<div class="widget-wrapper">',
            'after_widget'=>'</div>',
            'before_title'=>'<h4 class="widget-title">',
            'after_title'=>'</h4>'
        )
    );
    register_sidebar(
        array(
            'name'=>'Service 3',
            'id'=>'services-3',
            'description'=>'Third Service Area.',
            'before_widget'=>'<div class="widget-wrapper">',
            'after_widget'=>'</div>',
            'before_title'=>'<h4 class="widget-title">',
            'after_title'=>'</h4>'
        )
    );
}
