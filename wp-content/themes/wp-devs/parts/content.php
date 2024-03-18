<article>
    <!-- Título do post -->
    <h2>
        <!-- Exibe o permalink do post atual -->
        <a href="<?php the_permalink(); ?>">
            <!-- Retorna o título do post atual -->
            <?php the_title(); ?>
        </a>
    </h2>

    <!-- Thumbnail -->
    <?php
    // Verifica se o post possui thumbnail
    if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(array(200, '')); ?>
        </a>
    <?php endif; ?>

    <!-- Informações do post -->
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

        <!-- Exibe parte do conteúdo do post -->
        <?php the_excerpt(); ?>
    </div>
</article>