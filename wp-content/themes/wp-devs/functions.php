<?php

// Carrega o customizer.php quando o functions.php é carregado
require get_template_directory() . '/inc/customizer.php';

// Função responsável por carregar scripts
function wpdevs_load_scripts()
{
    // Enfileira a folha de estilo CSS
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

    // Enfileira o import da font-family
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);

    // Enfileira o script do dropdown do menu
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}

// Adiciona a função wpdevs_load_scripts ao gancho de ação
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');

// Configurações gerais
function wpdevs_config()
{

    // Tradução de strings
    $textdomain = 'wp-devs';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');


    /**
     * Registra um ou mais menus descrevendo-os 
     * num array de chave-valor, com slug e 
     * texto descritivo respectivamente.
     */
    register_nav_menus(
        array(
            'wp_devs_main_menu' => esc_html__('Main Menu', 'wp-devs'), // Menu principal (topo)
            'wp_devs_footer_menu' => esc_html__('Footer Menu', 'wp-devs') // Menu rodapé (base)
        )
    );

    // Suporte a cabeçalho customizado
    add_theme_support(
        'custom-header',
        array(
            'height' => 225,
            'width' => 1920
        )
    );

    // Suporte a thumbnails (imagens em miniatura)
    add_theme_support('post-thumbnails');

    // Suporte a logo customizável
    add_theme_support(
        'custom-logo',
        // Flex permite enviar imagens de tamanhos diferentes 
        array(
            'width' => 200,
            'height' => 110,
            'flex-height' => true,
            'flex-width' => true
        )
    );

    // Permite usar marcação HTML5 para formulários
    // de pesquisa, formulários de comentários, lista
    // de comentários, galeria de imagens, e legendas.
    // Em suma, deixa o HTML semanticamente correto.
    add_theme_support(
        'html5',
        array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script'
        )
    );

    // Permite que links de feed sejam gerados
    // automaticamente para posts e comentáris
    // na tag head.
    add_theme_support('automatic_feed_links');

    // Permite recuperar o título das páginas html
    add_theme_support('title-tag');

    // Suporte à imagens largas e preenchendo toda largura da tela
    //add_theme_support('align-wide');

    // Suporte a embeds responsivos
    add_theme_support('responsive-embeds');

    // Permite criar uma folha de estilos adicional
    // para controlar o estilo dos conteúdos dentro
    // do editor.
    add_theme_support('editor-styles');
    add_editor_style('style-editor.css');

    // Permite usar estilos do editor de blocos num tema clássico
    add_theme_support('wp-block-styles');

    /*
    // Altera a paleta de cores padrão
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name' => esc_html__('Primary', 'wp-devs'),
                'slug' => 'primary',
                'color' => '#001E32',
            ),
            array(
                'name' => esc_html__('Secondary', 'wp-devs'),
                'slug' => 'secondary',
                'color' => '#CFA707',
            )
        )
    );

    // Desabilita cores customizadas
    add_theme_support('disable-custom-colors');
    */
}

// Adiciona wpdevs_config ao gancho
add_action('after_setup_theme', 'wpdevs_config', 0);

// Registra estilos de bloco
function wpdevs_register_block_styles()
{
    // Registra uma folha de estilo que só é carregada quando for chamada.
    wp_register_style('wpdevs-block-style', get_template_directory_uri() . '/block-style.css');

    register_block_style(
        'core/quote', // tipo de bloco
        array(
            'name' => 'red-quote', // slug do bloco
            'label' => 'Red Quote', // label
            'is_default' => false, // Define se vai ser o estilo padrão
            //'inline-style' => '.wp-block-quote.is-style-red-quote { border-left: 7px solid #ff0000; background: #f9f3f3; padding: 10px 20px; }'
            'style_handle' => 'wpdevs-block-style'
        )
    );
}
add_action('init', 'wpdevs_register_block_styles');

// Registra sidebars
function wpdevs_sidebars()
{
    // Área de widgets lateral
    register_sidebar(
        array(
            'name'  => esc_html__('Blog Sidebar', 'wp-devs'),
            'id'    => 'sidebar-blog',
            'description'   => esc_html__('This is the Blog Sidebar. You can add your widgets here.', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>'
        )
    );

    // Área de widget central home 1
    register_sidebar(
        array(
            'name'  => esc_html__('Service 1', 'wp-devs'),
            'id'    => 'services-1',
            'description'   => esc_html__('First Service Area', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>'
        )
    );

    // Área de widget central home 2
    register_sidebar(
        array(
            'name'  => esc_html__('Service 2', 'wp-devs'),
            'id'    => 'services-2',
            'description'   => esc_html__('Second Service Area', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>'
        )
    );

    // Área de widget central home 3
    register_sidebar(
        array(
            'name'  => esc_html__('Service 3', 'wp-devs'),
            'id'    => 'services-3',
            'description'   => esc_html__('Third Service Area', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>'
        )
    );
}
// Adiciona wpdevs_sidebars ao gancho widgets_init
add_action('widgets_init', 'wpdevs_sidebars');

// Permite que versões mais antigas que 
// do wordpress 5.2 também façam o uso
// do gancho wp_body_open.
if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdevs_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'wpdevs_custom_excerpt_length', 999);
