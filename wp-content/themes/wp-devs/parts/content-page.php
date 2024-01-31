<article>
    <header>
        <h1><?php the_title(); ?></h1>
    </header>
    <?php the_content(); ?>
    <?php 
        // Mostra links de páginas para posts paginados
        wp_link_pages();
    ?>
</article>