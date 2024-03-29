<!-- TEMPLATE PARA POSTS ÚNICOS -->
<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

            <?php
            while (have_posts()) :
                the_post();
                get_template_part('parts/content', 'single');
            ?>
                <!-- Paginação entre posts -->
                <div class="wpdevs-pagination">
                    <div class="pages next">
                        <?php next_post_link('&laquo; %link'); ?>
                    </div>
                    <div class="pages previous">
                        <?php previous_post_link('%link &raquo;'); ?>
                    </div>
                </div>

            <?php
                // Verifica se o posts pode receber comentários e/ou possui comentários
                if (comments_open() || get_comments_number()) {
                    // Carrega a template de comentários
                    comments_template();
                }
            endwhile;
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>