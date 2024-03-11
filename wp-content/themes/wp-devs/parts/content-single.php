<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p>Posted in <?php echo get_the_date(); ?> by <?php echo the_author_posts_link(); ?>.</p>
            <?php
            // Verifica se o post tem categoria
            if (has_category()) : ?>
                <p>Categories: <?php the_category(' '); ?></p>
            <?php endif; ?>
            <?php
            // Verifica se o post tem tag
            if (has_tag()) : ?>
                <p>Tags: <?php the_tags(' ', ', '); ?></p>
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