<?php

function wpdevs_customizer($wp_customize) // Parâmetro é objeto da clase WP_Customize_Manager
{
    /* SEÇÃO DE CPOYRIGHT */
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
}

// Adicionando a função no gancho
add_action('customize_register', 'wpdevs_customizer');
