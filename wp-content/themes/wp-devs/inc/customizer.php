<?php

function wpdevs_customizer($wp_customize) // Parâmetro é objeto da clase WP_Customize_Manager
{
    /* SEÇÃO DE COPYRIGHT */
    $wp_customize->add_section(
        'sect_copyright', // identificador (id) da seção 
        array(
            'title' => __('Copyright Settings', 'wp-devs'), // título da seção
            'description' => __('Copyright Settings', 'wp-devs') // descrição da seção
        )
    );

    $wp_customize->add_setting(
        'sett_copyright', // identificador (id) da setting 
        array(
            'type' => 'theme_mod', // tipo de campo a ser guardado no BD
            'default' => __('Copyright X - All Rights Reserved', 'wp-devs'), // Valor padrão dentro do formulário do customizer.
            'sanitize_callback' => 'sanitize_text_field' // removes all HTML markup, as well as extra whitespace, leaves nothing but plain text
        )
    );

    $wp_customize->add_control(
        'sett_copyright', // referência à setting que receberá o valor do controle
        array(
            'label' => __('Copyright Information', 'wp-devs'),
            'description' => __('Please, type your copyright here', 'wp-devs'),
            'section' => 'sect_copyright', // referência à seção ao qual o controle está ligado
            'type' => 'text' // tipo campo do controle
        )
    );

    /* SEÇÃO DE HERO */
    $wp_customize->add_section(
        'sect_hero', // identificador (id) da seção 
        array(
            'title' => __('Hero Settings', 'wp-devs'), // título da seção
        )
    );

    // TÍTULO
    $wp_customize->add_setting(
        'sett_hero_title', // identificador (id) da setting 
        array(
            'type' => 'theme_mod', // tipo de campo a ser guardado no BD
            'default' => __('Please, add some title here', 'wp-devs'), // Valor padrão dentro do formulário do customizer.
            'sanitize_callback' => 'sanitize_text_field' // removes all HTML markup, as well as extra whitespace, leaves nothing but plain text
        )
    );

    $wp_customize->add_control(
        'sett_hero_title', // referência à setting que receberá o valor do controle
        array(
            'label' => __('Hero Title', 'wp-devs'),
            'description' => __('Please, add some title', 'wp-devs'),
            'section' => 'sect_hero', // referência à seção ao qual o controle está ligado
            'type' => 'text' // tipo campo do controle
        )
    );

    // SUBTÍTULO
    $wp_customize->add_setting(
        'sett_hero_subtitle', // identificador (id) da setting 
        array(
            'type' => 'theme_mod', // tipo de campo a ser guardado no BD
            'default' => 'Please, add some subtitle here', 'wp-devs', // Valor padrão dentro do formulário do customizer.
            'sanitize_callback' => 'sanitize_textarea_field', 'wp-devs' // removes all HTML markup, as well as extra whitespace, leaves nothing but plain text
        )
    );

    $wp_customize->add_control(
        'sett_hero_subtitle', // referência à setting que receberá o valor do controle
        array(
            'label' => __('Hero Subtitle', 'wp-devs'),
            'description' => __('Please, add some subtitle', 'wp-devs'),
            'section' => 'sect_hero', // referência à seção ao qual o controle está ligado
            'type' => 'textarea' // tipo campo do controle
        )
    );

    // TEXTO BOTÃO
    $wp_customize->add_setting(
        'sett_hero_button_text', // identificador (id) da setting 
        array(
            'type' => 'theme_mod', // tipo de campo a ser guardado no BD
            'default' => __('Learn more', 'wp-devs'), // Valor padrão dentro do formulário do customizer.
            'sanitize_callback' => 'sanitize_textarea_field' // removes all HTML markup, as well as extra whitespace, leaves nothing but plain text
        )
    );

    $wp_customize->add_control(
        'sett_hero_button_text', // referência à setting que receberá o valor do controle
        array(
            'label' => __('Hero button text', 'wp-devs'),
            'description' => __('Please, type your hero button text here', 'wp-devs'),
            'section' => 'sect_hero', // referência à seção ao qual o controle está ligado
            'type' => 'text' // tipo campo do controle
        )
    );

    // LINK BOTÃO
    $wp_customize->add_setting(
        'sett_hero_button_link', // identificador (id) da setting 
        array(
            'type' => 'theme_mod', // tipo de campo a ser guardado no BD
            'default' => '#', // Valor padrão dentro do formulário do customizer.
            'sanitize_callback' => 'esc_url_raw' // removes all HTML markup, as well as extra whitespace, leaves nothing but plain text
        )
    );

    $wp_customize->add_control(
        'sett_hero_button_link', // referência à setting que receberá o valor do controle
        array(
            'label' => __('Hero button link', 'wp-devs'),
            'description' => __('Please, type your hero button link here', 'wp-devs'),
            'section' => 'sect_hero', // referência à seção ao qual o controle está ligado
            'type' => 'url' // tipo campo do controle
        )
    );

    // ALTURA HERO
    $wp_customize->add_setting(
        'sett_hero_height', // identificador (id) da setting 
        array(
            'type' => 'theme_mod', // tipo de campo a ser guardado no BD
            'default' => 800, // Valor padrão dentro do formulário do customizer.
            'sanitize_callback' => 'absint' // removes all HTML markup, as well as extra whitespace, leaves nothing but plain text
        )
    );

    $wp_customize->add_control(
        'sett_hero_height', // referência à setting que receberá o valor do controle
        array(
            'label' => __('Hero height', 'wp-devs'),
            'description' => __('Please, type your hero height', 'wp-devs'),
            'section' => 'sect_hero', // referência à seção ao qual o controle está ligado
            'type' => 'number' // tipo campo do controle
        )
    );

    // IMAGEM HERO
    $wp_customize->add_setting(
        'sett_hero_background', // identificador (id) da setting 
        array(
            'type' => 'theme_mod', // tipo de campo a ser guardado no BD
            'sanitize_callback' => 'absint' // removes all HTML markup, as well as extra whitespace, leaves nothing but plain text
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'sett_hero_background',
            array(
                'label' => __('Hero Image', 'wp-devs'),
                'section'   => 'sect_hero',
                'mime_type' => 'image'
            )
        )
    );

    /* BLOG SECTION */
    $wp_customize->add_section(
        'sec_blog',
        array(
            'title' => __('Blog Section', 'wp-devs')
        )
    );

    // Posts per page
    $wp_customize->add_setting(
        'set_per_page',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_per_page',
        array(
            'label' => __('Posts per page', 'wp-devs'),
            'description' => __('How many items to display in the post list?', 'wp-devs'),
            'section' => 'sec_blog',
            'type' => 'number'
        )
    );

    // Post categories to include
    $wp_customize->add_setting(
        'set_category_include',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_category_include',
        array(
            'label' => __('Post categories to include', 'wp-devs'),
            'description' => __('Comma separated values or single category ID', 'wp-devs'),
            'section' => 'sec_blog',
            'type' => 'text'
        )
    );

    // Post categories to exclude
    $wp_customize->add_setting(
        'set_category_exclude',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_category_exclude',
        array(
            'label' => __('Post categories to exclude', 'wp-devs'),
            'description' => __('Comma separated values or single category ID', 'wp-devs'),
            'section' => 'sec_blog',
            'type' => 'text'
        )
    );
}

// Adicionando a função no gancho
add_action('customize_register', 'wpdevs_customizer');
