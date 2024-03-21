<?php get_header(); ?>

<!-- Imagem de cabeçalho -->
<img src="<?php header_image(); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="imagem de cabeçalho aleatória" />

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="page-item">
                    <?php
                    while (have_posts()) : the_post();
                        get_template_part('parts/content', 'page');
                        
                        // Verifica se o posts pode receber comentários e/ou possui comentários
                        if (comments_open() || get_comments_number()) {
                            // Carrega a template de comentários
                            comments_template();
                        }
                    endwhile;
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>