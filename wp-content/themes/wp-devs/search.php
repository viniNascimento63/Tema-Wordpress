<!-- TEMPLATE DA PÁGINA DE PESQUISA -->
<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <!-- Mostra o termo pesquisado -->
            <h1><?php _e('Search results for', 'wp-devs') ?>: <?php echo get_search_query(); ?></h1>

            <?php
            // Chama a caixa de pesquisa
            get_search_form();

            while (have_posts()) :
                the_post();
                // Formatação html para os posts
                get_template_part('parts/content', 'search');
            endwhile;
            // Exibe uma navegação paginada
            the_posts_pagination();
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>