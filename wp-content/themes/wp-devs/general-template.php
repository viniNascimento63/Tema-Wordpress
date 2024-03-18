<?php
/*
Template Name: General Template
*/
?>
<?php get_header(); ?>

<!-- Imagem de cabeçalho -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="imagem de cabeçalho aleatória" />

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="general-template">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <article>
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                            </article>
                        <?php
                        endwhile;
                    else : ?>
                        <p><?php _e('Nothing yet to be displayed!', 'wp-devs') ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>