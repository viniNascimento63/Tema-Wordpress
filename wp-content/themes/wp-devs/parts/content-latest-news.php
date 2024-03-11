<article class="latest-news">
    <?php 
    // Verifica se o post possui thumbnail
    if (has_post_thumbnail()) : ?>
        <!-- Exibe a thumbnail envolvendo-a com um link -->
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    <?php endif; ?>

    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="meta-info">
        <p>
            by <span><?php the_author_posts_link(); ?></span>
            <?php 
            // Verifica se o post categoria
            if (has_category()) : ?>
                Categories: <span><?php the_category(' '); ?></span>
            <?php endif; ?>
            <?php 
            // Verifica se o post tem tag
            if (has_tag()) : ?>
                Tags: <?php the_tags('', ', '); ?>
            <?php endif; ?>
        </p>
        <p><span><?php echo get_the_date(); ?></p>
        <?php the_excerpt() ?>
    </div>
</article>