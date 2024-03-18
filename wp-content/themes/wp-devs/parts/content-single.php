<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <!-- Data e autor -->
            <p><?php _e('Posted in', 'wp-devs') ?> <?php echo get_the_date(); ?> <?php _e('by', 'wp-devs') ?> <?php the_author_posts_link(); ?></p>
            <?php
            // Verifica se o post tem categoria
            if (has_category()) : ?>
                <!-- Categoria -->
                <p><?php _e('Categories', 'wp-devs') ?>: <?php the_category(' '); ?></p>
            <?php endif; ?>
            <?php
            // Verifica se um post tem tag
            if (has_tag()) : ?>
                <!-- Tags -->
                <p><?php _e('Tags', 'wp-devs') ?>: <?php the_tags(''); ?></p>
            <?php endif; ?>
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
        <?php
        // Exibe links para páginas internas
        // quando o conteúdo do post tiver
        // quebra de páginas.
        wp_link_pages();
        ?>
    </div>
</article>