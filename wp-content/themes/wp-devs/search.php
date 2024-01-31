<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

        <h1>Search results for: <?php echo get_search_query(); ?></h1>

            <?php 

            get_search_form();

            while( have_posts() ):
                the_post();
                get_template_part('parts/content', 'search');
            endwhile;
            /* Exibe navegação por paginação de próximo/anterior
             * para um conjunto de posts, quando aplicável.
            */
            the_posts_pagination();
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>