<?php

function wpdevs_customizer($wp_customize) // Parâmetro é objeto da clase WP_Customize_Manager
{
    /* SEÇÃO DE COPYRIGHT */
    $wp_customize->add_section(
        'sect_copyright', // identificador (id) da seção 
        array(
            'title' => 'Copyright Settings', // título da seção
            'description' => 'Copyright Settings' // descrição da seção
        )
    );

    $wp_customize->add_setting(
        'sett_copyright', // identificador (id) da setting 
        array(
            'type' => 'theme_mod', // tipo de campo a ser guardado no BD
            'default' => 'Copyright X - All Rights Reserved', // Valor padrão dentro do formulário do customizer.
            'sanitize_callback' => 'sanitize_text_field' // removes all HTML markup, as well as extra whitespace, leaves nothing but plain text
        )
    );

    $wp_customize->add_control(
        'sett_copyright', // referência à setting que receberá o valor do controle
        array(
            'label' => 'Copyright Information',
            'description' => 'Please, type your copyright here',
            'section' => 'sect_copyright', // referência à seção ao qual o controle está ligado
            'type' => 'text' // tipo campo do controle
        )
    );

    /* SEÇÃO DE HERO */
    $wp_customize->add_section(
        'sect_hero', // identificador (id) da seção 
        array(
            'title' => 'Hero Settings', // título da seção
        )
    );

    // TÍTULO
    $wp_customize->add_setting(
        'sett_hero_title', // identificador (id) da setting 
        array(
            'type' => 'theme_mod', // tipo de campo a ser guardado no BD
            'default' => 'Please, add some title here', // Valor padrão dentro do formulário do customizer.
            'sanitize_callback' => 'sanitize_text_field' // removes all HTML markup, as well as extra whitespace, leaves nothing but plain text
        )
    );

    $wp_customize->add_control(
        'sett_hero_title', // referência à setting que receberá o valor do controle
        array(
            'label' => 'Hero Title',
            'description' => 'Please, add some title',
            'section' => 'sect_hero', // referência à seção ao qual o controle está ligado
            'type' => 'text' // tipo campo do controle
        )
    );

    // SUBTÍTULO
    $wp_customize->add_setting(
        'sett_hero_subtitle', // identificador (id) da setting 
        array(
            'type' => 'theme_mod', // tipo de campo a ser guardado no BD
            'default' => 'Please, add some subtitle here', // Valor padrão dentro do formulário do customizer.
            'sanitize_callback' => 'sanitize_textarea_field' // removes all HTML markup, as well as extra whitespace, leaves nothing but plain text
        )
    );

    $wp_customize->add_control(
        'sett_hero_subtitle', // referência à setting que receberá o valor do controle
        array(
            'label' => 'Hero Subtitle',
            'description' => 'Please, add some subtitle',
            'section' => 'sect_hero', // referência à seção ao qual o controle está ligado
            'type' => 'textarea' // tipo campo do controle
        )
    );

    // TEXTO BOTÃO
    $wp_customize->add_setting(
        'sett_hero_button_text', // identificador (id) da setting 
        array(
            'type' => 'theme_mod', // tipo de campo a ser guardado no BD
            'default' => 'Learn more', // Valor padrão dentro do formulário do customizer.
            'sanitize_callback' => 'sanitize_textarea_field' // removes all HTML markup, as well as extra whitespace, leaves nothing but plain text
        )
    );

    $wp_customize->add_control(
        'sett_hero_button_text', // referência à setting que receberá o valor do controle
        array(
            'label' => 'Hero button text',
            'description' => 'Please, type your hero button text here',
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
            'label' => 'Hero button link',
            'description' => 'Please, type your hero button link here',
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
            'label' => 'Hero height',
            'description' => 'Please, type your hero height',
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
                'label' => 'Hero Image',
                'section'   => 'sect_hero',
                'mime_type' => 'image'
            )
        )
    );
}

// Adicionando a função no gancho
add_action('customize_register', 'wpdevs_customizer');
