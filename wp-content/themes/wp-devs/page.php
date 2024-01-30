<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <div class="page-item">
                            <?php 
                                while( have_posts() ) : the_post();
                                ?>
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
                                <?php

                                // Verifica se o post atual está aberto para comentários
                                // E/OU a quantidade de comentários do post
                                if ( comments_open() || get_comments_number() ) {
                                    // Carrega a template para comentários
                                    comments_template();
                                }
                                endwhile;
                            ?>                                
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>