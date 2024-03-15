<?php get_header(); ?>
<!-- Conteúdo da home -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            $hero_title = get_theme_mod('sett_hero_title', 'Please, add some title here');
            $hero_subtitle = get_theme_mod('sett_hero_subtitle', 'Please, add some subtitle here');
            $hero_button_text = get_theme_mod('sett_hero_button_text', 'Learn more');
            $hero_button_link = get_theme_mod('sett_hero_button_link', '#');
            $hero_height = get_theme_mod('sett_hero_height', 800);
            $hero_background = wp_get_attachment_url(get_theme_mod('sett_hero_background'));
            ?>
            <!-- HERO -->
            <section class="hero" style="background-image: url('<?php echo $hero_background; ?>')">
                <!-- Cobertura da imagem -->
                <div class="overlay" style="min-height: <?php echo $hero_height; ?>px;">
                    <div class="container">
                        <div class="hero-items">
                            <h1><?php echo $hero_title; ?></h1>
                            <p><?php echo nl2br($hero_subtitle); ?></p>
                            <a href="<?php echo $hero_button_link ?>"><?php echo $hero_button_text; ?></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SERVICES -->
            <section class="services">
                <h2>Services</h2>
                <div class="container">
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-1')) {
                            dynamic_sidebar('services-1');
                        }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-2')) {
                            dynamic_sidebar('services-2');
                        }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-3')) {
                            dynamic_sidebar('services-3');
                        }
                        ?>
                    </div>
                </div>
            </section>

            <!-- POSTS RECENTES -->
            <section class="home-blog">
                <h2>Latest News</h2>
                <div class="container">
                    <?php

                    // Instância da clase WP_Query
                    $postlist = new WP_Query(
                        array(
                            'post_type' => 'post', // argumento padrão
                            'posts_per_page' => 3, // quantidade de posts por consulta
                            'category__in'  => array(14, 6, 13), //
                            'category__not_in' => array(1)
                        )
                    );

                    // Verifica se existem posts a mostrar
                    if ($postlist->have_posts()) :
                        while ($postlist->have_posts()) : $postlist->the_post();
                            get_template_part('parts/content', 'latest-news');
                        endwhile;
                        // Faz com que a consulta principal do WP não seja afetada
                        wp_reset_postdata();
                    else : ?>
                        <p>Nothing yet to be displayed!</p>
                    <?php endif; ?>
                </div>
            </section>

        </main>
    </div>
</div>
<?php get_footer(); ?>