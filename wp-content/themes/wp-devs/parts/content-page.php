<article>
    <header>
        <h1><?php the_title(); ?></h1>
    </header>
    <?php the_content(); ?>
    <?php
    // Exibe links para páginas internas
    // quando o conteúdo do post tiver
    // quebra de páginas.
    wp_link_pages();
    ?>
</article>