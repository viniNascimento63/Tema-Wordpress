<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <!-- Título -->
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
        // Verifica o post não é uma página estática
        if ('post' == get_post_type()) : ?>
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
                    <p><?php _e('Tags', 'wp-devs') ?> <?php the_tags(''); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </header>
    <div class="content">
        <?php the_excerpt(); ?>
    </div>
</article>