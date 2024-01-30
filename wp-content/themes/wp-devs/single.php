<?php get_header();?>
    <div id="primary">
        <div id="main">
            <div class="container">
                <?php
                while(have_posts()) : the_post();
                    ?>
                    <article id="post-<?php the_ID();?>" <?php post_class();?> >
                        <header>
                            <h1><?php the_title();?></h1>
                            <div class="meta-info">
                                <p>Posted in <?php echo get_the_date();?> by <?php echo the_author_posts_link();?>.</p>
                                <p>Categories: <?php the_category( ' ' );?></p>
                                <p>Tags: <?php the_tags( ' ', ', ' );?></p>
                            </div>
                        </header>
                        <div class="content"><?php the_content();?></div>
                    </article>

                    <!-- Links de navegação dentro dos posts -->
                    <div class="wpdevs-pagination">
                        <div class="pages next">
                            <?php next_post_link( "Older posts >>" ); ?>
                        </div>
                        <div class="pages previous">
                            <?php previous_post_link( "<< Newer posts" ); ?>
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
