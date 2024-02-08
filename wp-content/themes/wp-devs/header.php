<!--- TEMPLATE para HEADER --->

<!DOCTYPE html>
<!-- 
    A função language_attributes()
    constrói um conjunto de atributos
    HTML contendo a direção do texto
    e as informações do idioma para
    a página.
 -->
<html <?php language_attributes(); ?> >
<head>
    <!--
        A função bloginfo('charset') 
        exibe a codificação para páginas
        e feeds, estabelecida em Settings >
        Reading.
    -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<!-- 
    A função body_class() gera
    automaticamente uma lista de 
    classes CSS que refletem o 
    contexto da página ou postagem
    atual do site.
-->
<body <?php body_class(); ?> >
<?php wp_body_open();?> <!-- Função obrigatória -->

    <!-- PÁGINA INTEIRA -->
    <div id="page" class="site">
        
        <!-- CABEÇALHO --->
        <header>
            <!-- LOGO E CAIXA DE PESQUISA -->
            <section class="top-bar">
                <div class="container">
                    <!-- Logo -->
                    <div class="logo">
                        <?php 
                        if( has_custom_logo() ){
                            the_custom_logo();
                        }else{
                            ?>
                                <a href="<?php echo home_url( '/' ); ?>"><span><?php bloginfo( 'name' ); ?></span></a>
                            <?php
                        }
                        ?>
                    </div>

                    <!-- Caixa de pesquisa -->
                    <div class="searchbox">
                        <?php get_search_form(); ?>
                    </div>  
                </div>
            </section>

            <?php if ( is_page( 'landing-page' )): 
                return;
            ?>
            <?php else:?>
                
            <!-- MENU DE NAVEGAÇÃO -->
            <section class="menu-area">
                <div class="container">
                    <nav class="main-menu">
                        <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <?php wp_nav_menu( array( 'theme_location' => 'wp_devs_main_menu', 'depth' => 2 )); ?>
                    </nav>                    
                </div>
            </section>

            <?php endif;?>
        </header>