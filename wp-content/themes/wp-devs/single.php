<?php get_header();?>
    <div id="primary">
        <div id="main">
            <div class="container">
                <?php
                while(have_posts()) : the_post();

                    get_template_part('parts/content', 'single');
                    ?>
                    
                    <!-- Links de navegação dentro dos posts -->
                    <div class="wpdevs-pagination">
                        <div class="pages next">
                            <?php next_post_link( '&laquo; %link' ); ?>
                        </div>
                        <div class="pages previous">
                            <?php previous_post_link( '%link &raquo' ); ?>
                        </div>
                    </div>

                    <?php
                    // Verifica se o post atual está aberto para comentários
                    // E/OU a quantidade de comentários do post
                    if ( comments_open() || get_comments_number() ) {
                        // Carrega a template para comentários
                        comments_template();
                    }
                endwhile;?>
            </div>
        </div>
    </div>
<?php get_footer()?>
