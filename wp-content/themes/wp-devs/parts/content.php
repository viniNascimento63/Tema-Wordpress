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
        <p>
            <!-- Retorna e exibe a data que o post foi criado -->
            Posted in <?php echo get_the_date(); ?> by
            <!-- Exibe link p/ página do autor do post atual -->
            <?php the_author_posts_link(); ?>.
        </p>

        <!-- Categoria -->
        <?php
        // Verifica se um post tem categoria
        if (has_category()) : ?>
            <!-- Exibe a(s) categoria(s) de um post -->
            <p>Categories: <?php the_category(' '); ?></p>
        <?php endif; ?>

        <!-- Tags -->
        <?php
        // Verifica se um post tem tag
        if (has_tag()) : ?>
            <!-- Exibe as tags -->
            <p><?php the_tags(); ?></p>
        <?php endif; ?>

        <!-- Exibe parte do conteúdo do post -->
        <?php the_excerpt(); ?>
    </div>
</article>